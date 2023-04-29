<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Users;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Request $request): Response
    {
        $user = $request->getSession()->get('user');
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        foreach ($reclamations as $key => $reclamation) {
            if ($reclamation->getIdUser()->getId() != $user->getId()) {
                unset($reclamations[$key]);
            }
        }

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $user = $request->getSession()->get('user');
         $userRepository = $entityManager->getRepository(Users::class);
            $currentUser = $userRepository->find($request->getSession()->get('user'));
        $form = $this->createForm(ReclamationType::class, $reclamation);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setIduser($currentUser);
            $reclamation->setEtat("en attente");
            
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
}
