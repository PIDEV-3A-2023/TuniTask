<?php

namespace App\Controller;

use App\Entity\Quizs;
use App\Form\QuizsType;
use App\Repository\QuestionsRepository;
use App\Repository\QuizsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;

class QuizsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/quizs/{id}/pdf', name: 'app_quizs_pdf')]
    public function pdf(Quizs $quiz)
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        $html = $this->renderView('quizs/pdf.html.twig', [
            'quiz' => $quiz,
        ]);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $pdfContent = $dompdf->output();

        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="quiz.pdf"');

        return $response;
    }



    /**
     * @Route("/quiz/{quizId}/update-score", name="update_quiz_score", methods={"POST"})
     */
    public function updateQuizScore(Request $request, $quizId)
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
        return new JsonResponse(['success' => true]);
    }

//    #[Route('/', name: 'index')]
//    public function index(): Response
//    {
//        return $this->render('quizs/stats.html.twig');
//    }

    #[Route('/', name: 'stats')]
    public function stats(QuizsRepository $quizsRepository){
        $quizs = $quizsRepository->findAll();
        $quiztitle = [];
        $quizscore = [];
        foreach ($quizs as $quiz){
            $quiztitle[] = $quiz->getQuizTitle();
            $quizscore[] = $quiz->getScore();
        }
        return $this->render('quizs/stats.html.twig', [
            'quiztitle' => json_encode($quiztitle),
            'quizscore' => json_encode($quizscore),
        ]);
    }

    #[Route('/quizs', name: 'list_quizs')]
    public function view(QuizsRepository $quizsRepository, Request $request): Response
    {
        $term = $request->query->get('searchInput');
        if ($term === null) {
            $quizs = $quizsRepository->findAll();
        } elseif (is_numeric($term)) {
            $quizs = $quizsRepository->findByScore($term);
        } else {
            $quizs = $quizsRepository->findByTitle($term);
        }
//$jsonContent = $normalizer->normalize($quizs, 'json', ['groups' => 'quizs:read']);
//        $retour= new JsonResponse($jsonContent);
//        return new JsonResponse($retour);
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
    public function new(Request $request ,FlashyNotifier $flashy,QuizsRepository $quizsRepository): Response
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
$flashy->success('Quiz is added successfully!', 'https://your-awesome-link.com');
            // Add flash message here
            $this->addFlash('success', 'Quiz has been added successfully!');

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
