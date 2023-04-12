<?php

namespace App\Controller;

use App\Entity\Answers;
use App\Entity\Questions;
use App\Entity\Quizs;
use App\Form\AnswersType;
use App\Form\QuestionsType;
use App\Repository\AnswersRepository;
use App\Repository\QuestionsRepository;
use App\Repository\QuizsRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/questions/{quizId}', name: 'app_questions')]
    public function index(int $quizId, QuestionsRepository $questionsRepository, QuizsRepository $quizsRepository): Response
    {
        $quiz = $quizsRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }
        $questions = $questionsRepository->findBy(['idQuiz' => $quiz]);

        return $this->render('questions/index.html.twig', [
            'quiz' => $quiz,
            'questions' => $questions,
        ]);
    }


    #[Route('/questions/{quizId}/add', name: 'app_questions_add')]
    public function addQuestion(Request $request, EntityManagerInterface $entityManager, int $quizId): Response
    {

        $quiz = $entityManager->getRepository(Quizs::class)->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $question = new Questions();
        $question->setIdQuiz($quiz);

        $form = $this->createForm(QuestionsType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('app_questions', ['quizId' => $quiz->getIdQuiz()]);
        }

        return $this->render('questions/add.html.twig', [
            'quiz' => $quiz,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/questions/{quizId}/edit/{questionId}', name: 'app_questions_edit')]
    public function editQuestion(Request $request, EntityManagerInterface $entityManager, int $quizId, int $questionId): Response
    {
        $question = $entityManager->getRepository(Questions::class)->find($questionId);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }
        $form = $this->createForm(QuestionsType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_questions', ['quizId' => $quizId]);
        }

        return $this->render('questions/edit.html.twig', [
            'quizId' => $quizId,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/questions/{quizId}/delete/{questionId}', name: 'app_questions_delete')]
    public function deleteQuestion(Request $request, EntityManagerInterface $entityManager, int $quizId, int $questionId): Response
    {
        $question = $entityManager->getRepository(Questions::class)->find($questionId);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }
        $entityManager->remove($question);
        $entityManager->flush();

        return $this->redirectToRoute('app_questions', ['quizId' => $quizId]);
    }
    #[Route('/questions/{quizId}/question/{questionId}/answers', name: 'app_question_answers')]
    public function showAnswers(int $quizId, int $questionId, QuestionsRepository $questionsRepository,QuizsRepository $quizsRepository, AnswersRepository $answersRepository): Response
    {
        $quiz = $quizsRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $question = $questionsRepository->find($questionId);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $answers = $answersRepository->findBy(['idQuestion' => $question]);

        return $this->render('answers/index.html.twig', [
            'quiz' => $quiz,
            'question' => $question,
            'answers' => $answers,
        ]);
    }






    #[Route('/questions/{quizId}/question/{questionId}/answers/add', name: 'app_question_answers_add')]
    public function addAnswer(Request $request, EntityManagerInterface $entityManager, int $quizId, int $questionId): Response
    {
        $quiz = $entityManager->getRepository(Quizs::class)->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $question = $entityManager->getRepository(Questions::class)->find($questionId);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $answer = new Answers();
        $answer->setIdQuiz($quizId);
        $answer->setIdQuestion($question);

        $form = $this->createForm(AnswersType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($answer);
            $entityManager->flush();

            return $this->redirectToRoute('app_question_answers', ['quizId' => $quizId, 'questionId' => $questionId]);
        }

        return $this->render('answers/add.html.twig', [
            'quiz' => $quiz,
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/questions/{quizId}/question/{questionId}/answers/{answerId}/edit', name: 'app_answers_edit')]
    public function editAnswer(Request $request, EntityManagerInterface $entityManager, int $quizId, int $questionId, int $answerId): Response
    {
        $answer = $entityManager->getRepository(Answers::class)->find($answerId);
        if (!$answer) {
            throw $this->createNotFoundException('Answer not found');
        }

        $question = $answer->getIdQuestion();
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $quiz = $question->getIdQuiz();
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $form = $this->createForm(AnswersType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_question_answers', ['quizId' => $quizId, 'questionId' => $questionId]);
        }

        return $this->render('answers/edit.html.twig', [
            'quiz' => $quiz,
            'quizId' => $quizId,
            'questionId' => $questionId,
            'form' => $form->createView(),
            'answer' => $answer,
        ]);
    }

    #[Route('/questions/{quizId}/question/{questionId}/answers/{answerId}/delete', name: 'app_answers_delete')]
    public function deleteAnswer(Request $request, EntityManagerInterface $entityManager, int $quizId, int $questionId, int $answerId): Response
    {
        $answer = $entityManager->getRepository(Answers::class)->find($answerId);
        if (!$answer) {
            throw $this->createNotFoundException('Answer not found');
        }

        $entityManager->remove($answer);
        $entityManager->flush();

        return $this->redirectToRoute('app_question_answers', ['quizId' => $quizId, 'questionId' => $questionId]);
    }




}
