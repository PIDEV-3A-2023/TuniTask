<?php

namespace App\Controller;

use App\Entity\Quizs;
use App\Form\QuizsType;
use App\Repository\QuestionsRepository;
use App\Repository\QuizsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
#[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('base2.html.twig');
    }
    #[Route('/quizs', name: 'list_quizs')]
    public function view(QuizsRepository $quizsRepository): Response
    {
        $quizs = $quizsRepository->findAll();

        return $this->render('quizs/index.html.twig', [
            'quizs' => $quizs,
        ]);
    }
    #[Route('/freequizs', name: 'free_quizs')]
    public function view2(QuizsRepository $quizsRepository): Response
    {
        $quizs = $quizsRepository->findAll();

        return $this->render('quizs/indexfreelancer.html.twig', [
            'quizs' => $quizs,
        ]);
    }
    #[Route('/quizs/add', name: 'app_quizs_new')]
    public function new(Request $request ,QuizsRepository $quizsRepository): Response
    {
        $quiz = new Quizs();
        $form = $this->createForm(QuizsType::class, $quiz);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $existingQuiz = $quizsRepository->findOneBy(['quizTitle' => $quiz->getQuizTitle()]);
            if ($existingQuiz) {
                $form->get('quizTitle')->addError(new FormError('Quiz already exists'));
                return $this->render('quizs/add.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
            $this->entityManager->persist($quiz);
            $this->entityManager->flush();

            return $this->redirectToRoute('list_quizs');
        }

        return $this->render('quizs/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/quizs/{id}/open', name: 'app_quizs_open')]
    public function open(Quizs $quiz, QuestionsRepository $questionsRepository): Response
        {
            $questions = $questionsRepository->findBy(['idQuiz' => $quiz]);

            return $this->render('questions/index.html.twig', [
                'quiz' => $quiz,
                'questions' => $questions,
            ]);
    }

    #[Route('/quizs/{id}/edit', name: 'app_quizs_edit')]
    public function edit(Request $request, Quizs $quiz): Response
    {
        $form = $this->createForm(QuizsType::class, $quiz);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('list_quizs');
        }

        return $this->render('quizs/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/quizs/{id}/delete', name: 'app_quizs_delete')]
    public function delete(Quizs $quiz): Response
    {
        $this->entityManager->remove($quiz);
        $this->entityManager->flush();

        return $this->redirectToRoute('list_quizs');
    }

}
