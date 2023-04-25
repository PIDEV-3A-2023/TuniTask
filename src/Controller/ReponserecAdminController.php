<?php

namespace App\Controller;

use App\Entity\Reponserec;
use App\Entity\Reclamation;
use App\Form\ReponserecType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff\DiffColumnChart;

#[Route('/admin/reponserec')]
class ReponserecAdminController extends AbstractController
{
    #[Route('/', name: 'admin_reponserec_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reponserecs = $entityManager
            ->getRepository(Reponserec::class)
            ->findAll();

        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        $pieChart = new PieChart();

        $charts = [['ReponseRec', 'Nombre par Reclamations']];

        foreach ($reclamations as $rec) {
            $recN = 0;
            foreach ($reponserecs as $rep) {
                if ($rec == $rep->getId()) {
                    $recN++;
                }
            }

            array_push($charts, [$rec->getNom(), $recN]);
        }

        $pieChart->getData()->setArrayToDataTable($charts);

        $pieChart->getOptions()->setTitle('Taux de reponses par Reclamations');
        $pieChart->getOptions()->setHeight(400);
        $pieChart->getOptions()->setWidth(400);
        $pieChart
            ->getOptions()
            ->getTitleTextStyle()
            ->setColor('#07600');
        $pieChart
            ->getOptions()
            ->getTitleTextStyle()
            ->setFontSize(25);

    //     $columnCharts = [['Reclamation', 'Nombre de Réponses']];

    //     foreach ($reclamations as $rec) {
    //         $recN = 0;
    //         foreach ($reponserecs as $rep) {
    //             if ($rec == $rep->getId()) {
    //                 $recN++;
    //             }
    //         }

    //         array_push($columnCharts, [$rec->getNom(), $recN]);
    //     }
            
    // $columnChart = new ColumnChart();
    // $columnChart->getData()->setArrayToDataTable($columnCharts);
    // $columnChart->getOptions()->getLegend()->setPosition('top');
    // $columnChart->getOptions()->setWidth(450);
    // $columnChart->getOptions()->setHeight(250);

        return $this->render('reponserecAdmin/index.html.twig', [
            'reponserecs' => $reponserecs,
            'piechart' => $pieChart,
        // 'columnChart' => $columnChart,
        ]);
    }

    #[Route('/new', name: 'admin_reponserec_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponserec = new Reponserec();
        $form = $this->createForm(ReponserecType::class, $reponserec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idReclamation = $request->request->get('reponserec')["id"];
            $reclamation = $entityManager
            ->getRepository(Reclamation::class)
            ->find($idReclamation);

            $reclamation->setEtat("traitée");

            // dd($reclamation);

            $entityManager->persist($reclamation);
            $entityManager->persist($reponserec);
            $entityManager->flush();

            return $this->redirectToRoute('admin_reponserec_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponserecAdmin/new.html.twig', [
            'reponserec' => $reponserec,
            'form' => $form,
        ]);
    }

    #[Route('/{reponseId}', name: 'admin_reponserec_show', methods: ['GET'])]
    public function show(Reponserec $reponserec): Response
    {
        return $this->render('reponserecAdmin/show.html.twig', [
            'reponserec' => $reponserec,
        ]);
    }

    #[Route('/{reponseId}', name: 'admin_reponserec_delete', methods: ['POST'])]
    public function delete(Request $request, Reponserec $reponserec, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponserec->getReponseId(), $request->request->get('_token'))) {
            $entityManager->remove($reponserec);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_reponserec_index', [], Response::HTTP_SEE_OTHER);
    }
}
