<?php

namespace App\Controller;

use App\Repository\DemandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Demande;
use App\Form\DemandeFormType;
use App\Entity\Users;

class DemandeController extends AbstractController
{
    #[Route('/', name: 'app_demande')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
        
        
    }

    #[Route('/admin', name: 'app_demandeb')]
    public function index1( DemandeRepository $DemandeRepository): Response
    {

        return $this->render('demande/readDbyAdmin.html.twig',['d' => $DemandeRepository->findAll(),]);
        
        
    }



 #[Route('/readDemande', name: 'app_readD')]
    public function readDemande(): Response
    {
    $entityManager = $this->getDoctrine()->getManager();        //crée une instance de la classe EntityManager de Doctrine

        // Récupération des informations à afficher grâce à une jointure entre les tables
        $demandes = $entityManager->getRepository(Demande::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't1', 'WITH', 't1.id = t.idClient')
            ->select('t.id, t1.firstName, t1.lastName, t.titre, t.description, t.salaire, t.delai, t.langage')
            ->getQuery()
            ->getResult();

        return $this->render('Demande/readD.html.twig', [
            'd' => $demandes,
        ]);
    }

    
    #[Route('/readMyDemandes', name: 'app_readmd')]
        public function readMyDemandes(): Response
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
                ->select('t.id,t1.firstName, t1.lastName, t.titre, t.description, t.salaire, t.delai, t.langage')
                ->getQuery()
                ->getResult();

            return $this->render('Demande/readmd.html.twig', [
                'd' => $demandes,
            ]);
        }


    #[Route('/deleteDemande/{id}', name: 'app_deleteD')]
    public function deleteDemande($id, DemandeRepository $rep, 
    ManagerRegistry $doctrine): Response
    {
        //récupérer la classe à supprimer
        $demande=$rep->find($id);
        //Action de suppression
        //récupérer l'Entite manager
        $em=$doctrine->getManager();
        $em->remove($demande);
       
        $em->flush();
        return $this->redirectToRoute('app_readmd');
    }



                  #[Route('/addDemande', name: 'app_addD')]
                  public function addDemande(Request $request): Response
                  {
                      $entityManager = $this->getDoctrine()->getManager();
                      // Création d'une nouvelle demande
                      $demande = new Demande();
                      // Récupération de l'utilisateur courant et de son ID
                      $userId = 42; // l'ID de l'utilisateur courant
                      $userRepository = $entityManager->getRepository(Users::class);
                      $currentUser = $userRepository->find($userId);
                      $demande->setIdClient($currentUser);
                      // Création du formulaire pour saisir les informations de la demande
                      $form = $this->createForm(DemandeformType::class, $demande);
                      $form->handleRequest($request);
                      if ($form->isSubmitted() && $form->isValid()) {
                      // Ajout des informations de la demande et de l'utilisateur courant
                      $demande->setTitre($form->get('titre')->getData());
                      $demande->setDescription($form->get('description')->getData());
                      $demande->setSalaire($form->get('salaire')->getData());
                      $demande->setDelai($form->get('delai')->getData());
                      $demande->setLangage($form->get('langage')->getData());
                      // Ajout de la demande dans la base de données
                      $entityManager->persist($demande);
                      $entityManager->flush();
                      return $this->redirectToRoute('app_readmd');}
                      return $this->renderForm("demande/addD.html.twig",array("f"=>$form));
                  }


               

 #[Route('/updateDemande/{id}', name: 'app_updateD')]
  public function updateDemande($id,DemandeRepository $rep,
  ManagerRegistry $doctrine,Request $request)
               {
      //récupérer la classe à modifier
      $demande=$rep->find($id);
    $form=$this->createForm(DemandeFormType::class,$demande);
                 $form->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()){
             
                 $em =$doctrine->getManager() ;
                $em->flush();
             return $this->redirectToRoute("app_readmd");
                       }
        return $this->renderForm("demande/editD.html.twig",
                                      array("f"=>$form));
                                  }
}
