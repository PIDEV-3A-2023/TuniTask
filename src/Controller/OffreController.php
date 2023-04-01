<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offre;
use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\OffreRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\OffreformType;

class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }

    #[Route('/reado', name: 'app_reado')]
    public function readoffre(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        // Récupération des informations à afficher grâce à une jointure entre les tables
        $result = $entityManager->getRepository(Offre::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
            ->select('t.description, t.titre, t.salaireh, t2.firstName, t2.lastName')
            ->getQuery()
            ->getResult();

        return $this->render('Offre/reado.html.twig', [
            'result' => $result,
        ]);
    }
    #[Route('/addo', name: 'app_addo')]
    public function addOffre(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Création d'une nouvelle offre
        $offre = new Offre();
        // Récupération de l'utilisateur courant et de son ID
        $userId = 54; // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        $offre->setUser($currentUser);
        // Création du formulaire pour saisir les informations de l'offre
        $form = $this->createForm(OffreformType::class, $offre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        // Ajout des informations de l'offre et de l'utilisateur courant
        $offre->setDescription($form->get('description')->getData());
        $offre->setTitre($form->get('titre')->getData());
        $offre->setSalaireh($form->get('salaireh')->getData());
        // Ajout de l'offre dans la base de données
        $entityManager->persist($offre);
        $entityManager->flush();
        return $this->redirectToRoute('app_reado');}
        return $this->renderForm("Offre/addo.html.twig",array("f"=>$form));
    }
    
}
