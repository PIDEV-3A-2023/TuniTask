<?php

use App\Entity\Quizs;
use App\Entity\Questions;
use App\Entity\Answers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnswersController extends AbstractController
{

//     #[Route("/quiz/{quizId}/question/{questionId}/answers", name:"answers_list")]
//
//    public function index($quizId, $questionId): Response
//    {
//        $entityManager = $this->getDoctrine()->getManager();
//
//        // Retrieve the Quiz entity
//        $quiz = $entityManager->getRepository(Quizs::class)->find($quizId);
//        if (!$quiz) {
//            throw $this->createNotFoundException('Quiz not found');
//        }
//
//        // Retrieve the Questions entity
//        $question = $entityManager->getRepository(Questions::class)->find($questionId);
//        if (!$question) {
//            throw $this->createNotFoundException('Question not found');
//        }
//
//        // Retrieve the Answers entities for the given Quiz and Question
//        $answers = $entityManager->getRepository(Answers::class)->findBy([
//            'idQuiz' => $quizId,
//            'id' => $questionId,
//        ]);
//
//        return $this->render('answers/index.html.twig', [
//            'quiz' => $quiz,
//            'question' => $question,
//            'answers' => $answers,
//        ]);
//    }
}

