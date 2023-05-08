<?php

namespace App\Controller\serializable;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Entity\Demande;
use App\Entity\Users;
use App\Repository\DemandeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;


class DemandeJsonController extends AbstractController
{
    #[Route('/demande/json', name: 'app_demande_json')]
    public function index(): Response
    {
        return $this->render('demande_json/index.html.twig', [
            'controller_name' => 'DemandeJsonController',
        ]);
    }

    #[Route('/readDemandesJSON', name: 'readDemandesJSON')]
    public function readDemandesJSON(SerializerInterface $serializer): Response
    {
    $entityManager = $this->getDoctrine()->getManager();        //crée une instance de la classe EntityManager de Doctrine

        // Récupération des informations à afficher grâce à une jointure entre les tables
        $demandes = $entityManager->getRepository(Demande::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't1', 'WITH', 't1.id = t.idClient')
            ->select('t.id, t1.firstName, t1.lastName, t.titre, t.description, t.salaire, t.delai, t.langage, t.etat')
            ->getQuery()
            ->getResult();

            //$demandesNormalises = $normalizer->normalize($demandes, 'json', ['groups' => "demandes"]);
            //$json = json_encode($demandesNormalises);

            $json = $serializer->serialize($demandes, 'json', ['groups' => "demandes"]);
        

        return new Response($json);
       
    }

    //#[Route('/readMyDemandesJSON', name: 'readMyDemandesJSON')]
    //public function readMyDemandesJSON(SerializerInterface $serializer): Response
    //{
       // $entityManager = $this->getDoctrine()->getManager();
        // Récupération de l'utilisateur courant
        //$userId = 42; // l'ID de l'utilisateur courant
        //$userRepository = $entityManager->getRepository(Users::class);
        //$currentUser = $userRepository->find($userId);
        // Récupération des offres de l'utilisateur courant
        //$demandes = $entityManager->getRepository(Demande::class)
           // ->createQueryBuilder('t')
           // ->leftJoin(Users::class, 't1', 'WITH', 't1.id = t.idClient')
           // ->where('t.idClient = :userId')
           // ->setParameter('userId', $currentUser->getId())
           // ->select('t.id,t1.firstName, t1.lastName, t.titre, t.description, t.salaire, t.delai, t.langage, t.etat')
           // ->getQuery()
           // ->getResult();
        
        
           // $json = $serializer->serialize($demandes, 'json', ['groups' => "demandes"]);
        

        //return new Response($json);
   // }


    #[Route('/readMyDemandesJSON', name: 'readMyDemandesJSON')]
    public function readMyDemandesJSON(SerializerInterface $serializer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Récupération de l'utilisateur courant
        $userId = 42; // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        // Récupération des offres de l'utilisateur courant
        $demandes = $entityManager->getRepository(Demande::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't1', 'WITH', 't1.id = t.idClient')
            ->where('t.idClient = :userId')
            ->setParameter('userId', $currentUser->getId())
            ->select('t.id,t1.firstName, t1.lastName, t.titre, t.description, t.salaire, t.delai, t.langage, t.etat')
            ->getQuery()
            ->getResult();
        
        //$demandesNormalises = $normalizer->normalize($demandes, 'json', ['groups' => "demandes"]);
            //$json = json_encode($demandesNormalises);
            $json = $serializer->serialize($demandes, 'json', ['groups' => "demandes"]);
        

        return new Response($json);
    }



    #[Route("/readDemandeById/{id}", name: "demandes")]
    public function readDemandeById($id, NormalizerInterface $normalizer, DemandeRepository $repo)
    {
    //$id = 15;
    $demandes = $repo->find($id);
    $demandeNormalises = $normalizer->normalize($demandes, 'json', ['groups' => "demandes"]); 
    return new Response(json_encode($demandeNormalises));
    }

    #[Route('/addDemandeJSON/new', name: 'addDemandeJson')]
    public function addDemandeJSON(Request $request, NormalizerInterface $Normalizer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Création d'une nouvelle demande
        $demande = new Demande();
        // Récupération de l'utilisateur courant et de son ID
        $userId = 42; // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
       $currentUser = $userRepository->find($userId);
        $demande->setIdClient($currentUser);
        
        // Ajout des informations de la demande et de l'utilisateur courant
        $demande->setTitre($request->get('titre'));
        $demande->setDescription($request->get('description'));
        $demande->setSalaire($request->get('salaire'));
        $demande->setDelai($request->get('delai'));
        $demande->setLangage($request->get('langage'));
        // Ajout de la demande dans la base de données
        $entityManager->persist($demande);
        $entityManager->flush();

        $jsonContent = $Normalizer->normalize($demande, 'json', ['groups' => "demandes"]);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/updateDemandeJSON/{id}', name: 'updateDemandeJson')]
    public function updateDemandeJSON($id, Request $request, NormalizerInterface $Normalizer)
                 {
        //récupérer la classe à modifier
        $em = $this->getDoctrine()->getManager();
        $demande=$em->getRepository(Demande::class)->find($id);
        $demande->setTitre($request->get('titre'));
        $demande->setDescription($request->get('description'));
        $demande->setSalaire($request->get('salaire'));
        $demande->setDelai($request->get('delai'));
        $demande->setLangage($request->get('langage'));
        
        $em->flush();

        $jsonContent = $Normalizer->normalize($demande, 'json', ['groups' => "demandes"]);      
        return new Response("Demande updated successfully " . json_encode($jsonContent));
            
     }


     #[Route('/deleteDemandeJSON/{id}', name: 'deleteDemandeJSON')]
     public function deleteDemandeJSON($id, DemandeRepository $rep, 
     ManagerRegistry $doctrine, NormalizerInterface $Normalizer): Response
     {
         //récupérer la classe à supprimer
         $demande=$rep->find($id);
         //Action de suppression
         //récupérer l'Entite manager
         $em=$doctrine->getManager();
         $em->remove($demande);
         $em->flush();
         $jsonContent = $Normalizer->normalize($demande, 'json', ['groups' => "demandes"]);      
         return new Response("Demande deleted successfully " . json_encode($jsonContent));

     }


        }