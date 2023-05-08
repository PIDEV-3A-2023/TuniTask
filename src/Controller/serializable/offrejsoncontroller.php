<?php

namespace App\Controller\serializable;

use App\Entity\Offre;
use App\Entity\Commentaire;
use App\Entity\Users;
use App\Repository\OffreRepository;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class offrejsoncontroller extends AbstractController
{
   


    #[Route("/Alloffre", name: "listoffre")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getOffres(OffreRepository $repo, SerializerInterface $serializer)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Offre::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
            ->select('t.idoffre,t.description, t.titre, t.salaireh, t2.firstName, t2.lastName,t2.srcimage')
            ->getQuery()
            ->getResult();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* offres en  tableau associatif simple.
        // $offresNormalises = $normalizer->normalize($offres, 'json', ['groups' => "offres"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($offresNormalises);

        $json = $serializer->serialize($result, 'json' ,['groups' => "offres", 'include' => ["user"]]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }

    #[Route('/readmonoffre/{id}', name: 'app_readmonoffre')]
public function readuoffre($id,SerializerInterface $serializer): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    // Récupération de l'utilisateur courant
    $userId = $id; // l'ID de l'utilisateur courant
    $userRepository = $entityManager->getRepository(Users::class);
    $currentUser = $userRepository->find($userId);
    // Récupération des offres de l'utilisateur courant
    $result = $entityManager->getRepository(Offre::class)
        ->createQueryBuilder('t')
        ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
        ->where('t.user = :userId')
        ->setParameter('userId', $currentUser->getId())
        ->select('t.idoffre,t.description, t.titre, t.salaireh, t2.firstName, t2.lastName,t2.srcimage')
        ->getQuery()
        ->getResult();

    // Conversion du résultat en JSON
    $json = $serializer->serialize($result, 'json');

    // Création de la réponse HTTP
    $response = new Response($json);

    return $response;
}


#[Route('/addoffre/{id}', name: 'app_addoffre')]
    public function addOffrej($id,Request $request,   NormalizerInterface $Normalizer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Création d'une nouvelle offre
        $offre = new Offre();
        // Récupération de l'utilisateur courant et de son ID
        $userId = $id; // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        $offre->setUser($currentUser);
        $offre->setDescription($request->get('description'));
        $offre->setTitre($request->get('titre'));
        $offre->setSalaireh((float) $request->get('salaireh'));
        // Ajout de l'offre dans la base de données
        $entityManager->persist($offre);
        $entityManager->flush();
        $jsonContent = $Normalizer->normalize($offre, 'json', ['groups' => 'offres']);
        return new Response(json_encode($jsonContent));
    }


    #[Route('/editoffre/{id}', name: 'app_editoffre')]
        public function editOffrej(Request $request, $id, NormalizerInterface $Normalizer): Response
        {
            $entityManager = $this->getDoctrine()->getManager();
            // Récupération de l'offre à modifier
            $offre = $entityManager->getRepository(Offre::class)->find($id);
                // Mise à jour des informations de l'offre
                $offre->setDescription($request->get('description'));
                $offre->setTitre($request->get('titre'));
                $offre->setSalaireh((float) $request->get('salaireh'));
                // Mise à jour de l'offre dans la base de données
                $entityManager->flush();
                $jsonContent = $Normalizer->normalize($offre, 'json', ['groups' => 'offres']);
                return new Response(json_encode($jsonContent));
        }

        #[Route('/deleteoffre/{id}', name: 'app_deleteoffre')]
        public function deleteOffrej(Request $request, $id, NormalizerInterface $Normalizer): Response
        {
            $entityManager = $this->getDoctrine()->getManager();

            // Recherche de l'offre à supprimer
            $offreRepository = $entityManager->getRepository(Offre::class);
            $offre = $offreRepository->find($id);
            // Suppression de l'offre
            $entityManager->remove($offre);
            $entityManager->flush();
            $jsonContent = $Normalizer->normalize($offre, 'json', ['groups' => 'offres']);
                return new Response(json_encode($jsonContent));
            
        }

        #[Route("/Recupoffre/{id}", name: "Recupoffre")]
    public function OffreID($id, NormalizerInterface $normalizer, OffreRepository $repo)
    {
        $offre = $repo->find($id);
        $offreNormalises = $normalizer->normalize($offre, 'json', ['groups' => "offres"]);
        return new Response(json_encode($offreNormalises));
    }

    #[Route("/Serchoffr/{searchTerm}", name: "Serchoffr")]
    public function search(string $searchTerm , NormalizerInterface $normalizer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Offre::class)
            ->createQueryBuilder('o')
            ->leftJoin('o.user', 'u')
            ->where('o.titre LIKE :searchTerm')
            ->orWhere('o.description LIKE :searchTerm')
            ->orWhere('o.salaireh LIKE :searchTerm')
            ->orWhere('o.sumr LIKE :searchTerm')
            ->orWhere('o.idoffre LIKE :searchTerm')
            ->orWhere('u.firstName LIKE :searchTerm')
            ->orWhere('u.lastName LIKE :searchTerm')
            ->orWhere('u.srcimage LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$searchTerm.'%')
            ->select('o.sumr,o.idoffre,o.description, o.titre, o.salaireh, u.firstName, u.lastName,u.srcimage')
            ->getQuery()
            ->getResult();
    
        
         $offreNormalises = $normalizer->normalize($result, 'json', ['groups' => "offres"]);
        return new Response(json_encode($offreNormalises));
    }






    #[Route('/Affichecommentaire/{id}/{idu}', name: 'Affichecommentaire')]
    public function affichCommentaire($idu,Request $request, $id, MailerInterface $mailer,NormalizerInterface $normalizer): Response
    {   
        $userId = $idu; 
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Commentaire::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
            ->where('t.offre = :offreId')
            ->setParameter('offreId', $id)
            ->select('t.commentaire,t2.firstName, t2.lastName,t2.srcimage,t2.id,t.idcommentaire,t.jaime,t.djaime')
            ->getQuery()
            ->getResult();
            
            
        // Création d'une nouvelle commentaire
        
        // Récupération de l'utilisateur courant et de son ID
        // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        $tex = sprintf("Hi %s,\n\nYour offer has been viewed by %s.\n\nBest regards,\nThe Job Platform team", 
        "anes", $currentUser->getFirstName());
        $email = (new Email())
        ->from("alphateamesprit53@gmail.com")
        ->to("elfadanes@gmail.com")
        ->subject('Quelqu un vu votre offre')
        ->text($tex);
        $mailer->send($email);
        $offreNormalises = $normalizer->normalize($result, 'json', ['groups' => "Commentaires"]);
        return new Response(json_encode($offreNormalises));
        
    }

    #[Route('/addccommentaire/{id}/{idu}', name: 'addccommentaire')]
    public function addCommentaire($idu,Request $request, $id,NormalizerInterface $normalizer ): Response
    {   
        $entityManager = $this->getDoctrine()->getManager(); 
        $Commentaire = new Commentaire();
        $userId = $idu; 
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);       
        $Commentaire->setUser($currentUser);
        // Récupération de l'Offre courant et de son ID
        $idoffre = $id; // l'ID de l'utilisateur courant
        $OffreRepository = $entityManager->getRepository(Offre::class);
        $currentOffre = $OffreRepository->find($idoffre);
        $Commentaire->setOffre($currentOffre);
        // Création du formulaire pour saisir les informations de l'Commentaire          
        // Ajout des informations de l'offre et de l'utilisateur courant
        $Commentaire->setCommentaire($request->get('commentaire'));
        // Ajout de l'Commentaire dans la base de données
        $entityManager->persist($Commentaire);
        $entityManager->flush();
        $offreNormalises = $normalizer->normalize($Commentaire, 'json', ['groups' => "Commentaires"]);
        return new Response(json_encode($offreNormalises));
    }


    #[Route('/readmoncommentaire/{idu}', name: 'readmoncommentaire')]
    public function readucommentaire($idu,SerializerInterface $serializer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Récupération de l'utilisateur courant
        $userId = $idu; // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        // Récupération des offres de l'utilisateur courant
        $result = $entityManager->getRepository(Commentaire::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
            ->where('t.user = :userId')
            ->setParameter('userId', $currentUser->getId())
            ->select('t.commentaire,t2.firstName, t2.lastName,t2.srcimage,t2.id,t.idcommentaire,t.jaime,t.djaime')
            ->getQuery()
            ->getResult();
    
        // Conversion du résultat en JSON
        $json = $serializer->serialize($result, 'json');
    
        // Création de la réponse HTTP
        $response = new Response($json);
    
        return $response;
    }




    #[Route('/editccommentaire/{id}', name: 'editccommentaire')]
    public function editCommentairej(Request $request, $id, NormalizerInterface $normalizer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Récupération de l'Commentaire à modifier
        $Commentaire = $entityManager->getRepository(Commentaire::class)->find($id);
        // Vérification si l'Commentaire existe
       
            // Mise à jour des informations de l'Commentaire
            $Commentaire->setCommentaire($request->get('commentaire'));
            // Mise à jour de l'Commentaire dans la base de données
            $entityManager->flush();
            $offreNormalises = $normalizer->normalize($Commentaire, 'json', ['groups' => "Commentaires"]);
        return new Response(json_encode($offreNormalises));
        
    }


    #[Route('/deletecommentaire/{id}', name: 'deletecommentaire')]
            public function deleteCommentairej($id,NormalizerInterface $normalizer): Response
            {
                $entityManager = $this->getDoctrine()->getManager();

                // Recherche de l'Commentaire à supprimer
                $CommentaireRepository = $entityManager->getRepository(Commentaire::class);
                $Commentaire = $CommentaireRepository->find($id);

                // Vérification que l'Commentaires existe
               

                // Suppression de l'Commentaire
                $entityManager->remove($Commentaire);
                $entityManager->flush();

                $offreNormalises = $normalizer->normalize($Commentaire, 'json', ['groups' => "Commentaires"]);
                return new Response(json_encode($offreNormalises));
            }


            #[Route("/Recupcommentaire/{id}", name: "Recupcommentaire")]
            public function CommentaireID($id, NormalizerInterface $normalizer, CommentaireRepository $repo)
            {
                $offre = $repo->find($id);
                $offreNormalises = $normalizer->normalize($offre, 'json', ['groups' => "Commentaires"]);
                return new Response(json_encode($offreNormalises));
            }
}
