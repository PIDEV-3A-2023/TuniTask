<?php

namespace App\Controller\serializable;

use App\Entity\Quizs;
use App\Form\QuizsType;
use App\Repository\QuestionsRepository;
use App\Repository\QuizsRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;


class QuizsControllerjson extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/quizs/addjson', name: 'app_quizs_newjson')]
    public function new(Request $request, FlashyNotifier $flashy, QuizsRepository $quizsRepository, SerializerInterface $serializer): JsonResponse
    {
        $quiz = new Quizs();
        $form = $this->createForm(QuizsType::class, $quiz);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingQuiz = $quizsRepository->findOneBy(['quizTitle' => $quiz->getQuizTitle()]);

            if ($existingQuiz) {
                $form->get('quizTitle')->addError(new FormError('Quiz already exists'));

                $jsonContent = $serializer->serialize(['errors' => $form->getErrors(true, false)], 'json');
                return new JsonResponse($jsonContent, Response::HTTP_BAD_REQUEST, [], true);
            }

            $this->entityManager->persist($quiz);
            $this->entityManager->flush();

            $flashy->success('Quiz is added successfully!', 'https://your-awesome-link.com');
            $this->addFlash('success', 'Quiz has been added successfully!');

            $jsonContent = $serializer->serialize(['quiz' => $quiz], 'json');
            return new JsonResponse($jsonContent, Response::HTTP_CREATED, [], true);
        }

        $jsonContent = $serializer->serialize(['errors' => $form->getErrors(true, false)], 'json');
        return new JsonResponse($jsonContent, Response::HTTP_BAD_REQUEST, [], true);
    }
    #[Route('/add', name: 'add')]
    public function addstation(Request $request,NormalizerInterface $Normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $station = new Quizs();
        $station->setQuizTitle($request->get('quizTitle'));
        $station->setQuizDescription($request->get('quizDescription'));
        $station->setScore($request->get('score'));
        $em->persist($station);
        $em->flush();

        $jsonContent = $Normalizer->normalize($station, 'json', ['groups' => 'quizs']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/quiz/{quizId}/update-scorejson", name="update_quiz_scorejson", methods={"POST"})
     */
    public function updateQuizScore(Request $request, $quizId, NormalizerInterface $normalizer)
    {
        $entityManager = $this->entityManager;
        $quiz = $entityManager->getRepository(Quizs::class)->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }
        $score = $request->request->get('score');
        $quiz->setScore($quiz->getScore() + $score);
        $entityManager->persist($quiz);
        $entityManager->flush();
        $jsonContent = $normalizer->normalize(['success' => true], 'json');
        return new JsonResponse($jsonContent);
    }

    #[Route('/statjson', name: 'statsjson')]
    public function stats(QuizsRepository $quizsRepository, NormalizerInterface $normalizer)
    {
        $quizs = $quizsRepository->findAll();
        $quiztitle = [];
        $quizscore = [];
        foreach ($quizs as $quiz) {
            $quiztitle[] = $quiz->getQuizTitle();
            $quizscore[] = $quiz->getScore();
        }
        $jsonContent = $normalizer->normalize([
            'quiztitle' => $quiztitle,
            'quizscore' => $quizscore,
        ], 'json');
        return new JsonResponse($jsonContent);
    }
    #[Route('/quizsjson', name: 'list_quizsjson')]
    public function view(QuizsRepository $quizsRepository, Request $request, SerializerInterface $serializer): Response
    {
        $term = $request->query->get('searchInput');
        if ($term === null) {
            $quizs = $quizsRepository->findAll();
        } elseif (is_numeric($term)) {
            $quizs = $quizsRepository->findByScore($term);
        } else {
            $quizs = $quizsRepository->findByTitle($term);
        }

        if (empty($quizs)) {
            $data = [
                'status' => 404,
                'message' => 'No quiz found'
            ];
            $jsonContent = $serializer->serialize($data, 'json');
            $response = new Response($jsonContent, 404);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }

        $jsonContent = $serializer->serialize($quizs, 'json', ['groups' => 'quizs']);
        $response = new Response($jsonContent);
        //$response->headers->set('Content-Type', 'application/json');

        return $response;
    }

        #[Route('/quizs/{quizId}/editjson', name: 'app_quizs_editjson')]
        public function edit($quizId,Request $request, EntityManagerInterface $entityManager): Response
        {
            $em = $this->getDoctrine()->getManager();
            $quiz = $entityManager->getRepository(Quizs::class)->find($quizId);
            if (!$quiz) {
                throw $this->createNotFoundException('Quiz not found');}

            $quiz->setQuizTitle($request->get('quizTitle'));
            $quiz->setQuizDescription($request->get('quizDescription'));
            $quiz->setScore($request->get('score'));

            $em->flush();

            $jsonContent = $this->get('serializer')->serialize($quiz, 'json', ['groups' => 'quizs']);
            $response = new Response($jsonContent);
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    #[Route('/quizs/{id}/deletejson', name: 'app_quizs_deletejson')]
    public function delete(Quizs $quiz, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($quiz);
        $entityManager->flush();

        $jsonContent = $this->get('serializer')->serialize($quiz, 'json', ['groups' => 'quizs']);
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    #[Route('/quizs/{id}/openjson', name: 'app_quizs_openjson')]
    public function open(Quizs $quiz, QuestionsRepository $questionsRepository, SerializerInterface $serializer): Response
    {
        $questions = $questionsRepository->findBy(['idQuiz' => $quiz]);

        $data = [
            'quiz' => $quiz,
            'questions' => $questions
        ];

        $json = $serializer->serialize($data, 'json');

        return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }
}