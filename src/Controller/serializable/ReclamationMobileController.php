<?php

namespace App\Controller\serializable;

use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use App\Repository\UsersRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/mobile/reclamation')]
class ReclamationMobileController extends AbstractController
{
  
    #[Route('/', name: 'app_reclamation_json')]
    public function index(ReclamationRepository $reclamationRepository,NormalizerInterface $normlizer): Response
    {
        
        $reclamations = $reclamationRepository->findAll();
         $recNor=$normlizer->normalize($reclamations,'json');
        $json=json_encode($recNor);
        return new Response($json);
     
    }

    
    #[Route('/addreclamation/{id}', name: 'addreclamation')]
    public function add($id,Request $request, UsersRepository $userRepository,SerializerInterface $serializer): JsonResponse
    {
        $reclamation = new Reclamation();


        $user = $userRepository->find($id);
        


        $reclamation->setIdUser($user);
        $reclamation->setNom($request->get("nom"));
        $reclamation->setPrenom($request->get("prenom"));
        $reclamation->setEmail($request->get("email"));
        $reclamation->setDescription($request->get("description"));
        $reclamation->setEtat($request->get("etat"));

           

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reclamation);
        $entityManager->flush();


        $email = $user->getEmail();

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            try {
                $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
                $transport->setUsername('app.esprit.pidev@gmail.com')->setPassword('dqwqkdeyeffjnyif');
                $mailer = new Swift_Mailer($transport);
                $message = new Swift_Message('Notification');
                $message->setFrom(array('app.esprit.pidev@gmail.com' => 'Notification'))
                    ->setTo(array($email))
                    ->setBody("<h1>Reclamation ajouté avec success</h1>", 'text/html');
                $mailer->send($message);
            } catch (Exception $exception) {
                return new JsonResponse(null, 405);
            }
        }

         $json = $serializer->serialize($reclamation, 'json' ,['groups' => "Reclamations", 'include' => ["user"]]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new JsonResponse($json);


    }

    
     #[Route('/modreclamation/{iddu}', name: 'modreclamation')]
    public function edit($iddu,Request $request, ReclamationRepository $reclamationRepository, UsersRepository $userRepository,SerializerInterface $serializer): Response
    {
        $reclamation = $reclamationRepository->find((int)$request->get("id"));

        


        $user = $userRepository->find($iddu);
        if (!$user) {
            return new JsonResponse("user with id " . (int)$request->get("user") . " does not exist", 203);
        }


        $reclamation->setIdUser($user);
        $reclamation->setNom($request->get("nom"));
        $reclamation->setPrenom($request->get("prenom"));
        $reclamation->setEmail($request->get("email"));
        $reclamation->setDescription($request->get("description"));
        $reclamation->setEtat($request->get("etat"));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reclamation);
        $entityManager->flush();

        $json = $serializer->serialize($reclamation, 'json' ,['groups' => "Reclamations", 'include' => ["user"]]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new JsonResponse($json);
    }

    
         #[Route('/deletereclamation/{id}', name: 'deletereclamation')]
    public function delete(Request $request, EntityManagerInterface $entityManager, ReclamationRepository $reclamationRepository,SerializerInterface $serializer): JsonResponse
    {
        $reclamation = $reclamationRepository->find((int)$request->get("id"));

        if (!$reclamation) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($reclamation);
        $entityManager->flush();

        $json = $serializer->serialize($reclamation, 'json' ,['groups' => "Reclamations", 'include' => ["user"]]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new JsonResponse($json);
    }


}