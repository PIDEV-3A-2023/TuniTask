<?php

namespace App\Controller;

use App\Repository\PropositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Proposition;
use App\Entity\Demande;
use App\Entity\Users;

class PropositionController extends AbstractController
{
    #[Route('/proposition', name: 'app_proposition')]
    public function index(): Response
    {
        return $this->render('proposition/index.html.twig', [
            'controller_name' => 'PropositionController',
        ]);
    }


  

        #[Route('/readProposition', name: 'app_readP')]
        public function readProposition(): Response
        {
            $entityManager = $this->getDoctrine()->getManager();
             //Récupération de l'utilisateur courant
            $userId = 41; // l'ID de l'utilisateur courant
            $userRepository = $entityManager->getRepository(Users::class);
            $currentUser = $userRepository->find($userId);
            // Récupération des offres de l'utilisateur courant
       $propositions = $entityManager->getRepository(Proposition::class)
                ->createQueryBuilder('t')
                ->leftJoin(Users::class, 't1', 'WITH', 't1.id = t.idFreelancer')
                ->leftJoin(Demande::class, 't2', 'WITH', 't2.id = t.idDemande')
                ->where('t.idFreelancer = :userId')
                ->setParameter('userId', $currentUser->getId())
                ->select('t.id, t2.id as idDemande, t1.firstName, t1.lastName, t1.email')
                ->getQuery()
                ->getResult();
                return $this->render('Proposition/readP.html.twig', [
                     'p' => $propositions,
                ]);
             }

    #[Route('/deleteProposition/{id}', name: 'app_deleteP')]
    public function deleteProposition($id, PropositionRepository $rep, 
    ManagerRegistry $doctrine): Response
    {
        //récupérer la classe à supprimer
        $proposition=$rep->find($id);


        //Action de suppression
        //récupérer l'Entite manager
        $em=$doctrine->getManager();
        $em->remove($proposition);
        
        $em->flush();
        return $this->redirectToRoute('app_readP');
    }

   


}
