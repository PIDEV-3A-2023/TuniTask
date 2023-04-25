<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/admin/reclamation')]
class ReclamationAdminController extends AbstractController
{
    #[Route('/sortByAscEtat', name: 'sort_by_asc_etat')]
    public function sortAscEtat(EntityManagerInterface $entityManager, ReclamationRepository $reclamationRepository, Request $request, PaginatorInterface $paginator)
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        $query = $request->query->get('q');
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findByNom($query);

        $reclamations = $reclamationRepository->sortByAscEtat();
    
        $pagination = $paginator->paginate(
            $reclamations, // Requête contenant les données à paginer (ici nos products)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
    
        return $this->render("reclamationAdmin/index.html.twig",[
            'reclamations' => $pagination,
            'query' => $query,
        ]);
    }
    
    #[Route('/sortByDescEtat', name: 'sort_by_desc_etat')]
    public function sortDescEtat(EntityManagerInterface $entityManager, ReclamationRepository $reclamationRepository, Request $request, PaginatorInterface $paginator)
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        $query = $request->query->get('q');
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findByNom($query);

        $reclamations = $reclamationRepository->sortByDescEtat();
    
        $pagination = $paginator->paginate(
            $reclamations, // Requête contenant les données à paginer (ici nos products)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
    
        return $this->render("reclamationAdmin/index.html.twig",[
            'reclamations' => $pagination,
            'query' => $query,
        ]);
    }
    
    #[Route('/sortByAscNom', name: 'sort_by_asc_nom')]
    public function sortAscNom(EntityManagerInterface $entityManager, ReclamationRepository $reclamationRepository, Request $request, PaginatorInterface $paginator)
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        $query = $request->query->get('q');
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findByNom($query);

        $reclamations = $reclamationRepository->sortByAscNom();
    
        $pagination = $paginator->paginate(
            $reclamations, // Requête contenant les données à paginer (ici nos products)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
    
        return $this->render("reclamationAdmin/index.html.twig",[
            'reclamations' => $pagination,
            'query' => $query,
        ]);
    }
    
    #[Route('/sortByDescNom', name: 'sort_by_desc_nom')]
    public function sortDescNom(EntityManagerInterface $entityManager, ReclamationRepository $reclamationRepository, Request $request, PaginatorInterface $paginator)
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        $query = $request->query->get('q');
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findByNom($query);

        $reclamations = $reclamationRepository->sortByDescNom();
    
        $pagination = $paginator->paginate(
            $reclamations, // Requête contenant les données à paginer (ici nos products)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
    
        return $this->render("reclamationAdmin/index.html.twig",[
            'reclamations' => $pagination,
            'query' => $query,
        ]);
    }
    #[Route('/search', name: 'reclamation_search')]
    public function search(Request $request, ReclamationRepository $reclamationRepository, PaginatorInterface $paginator): Response
    {
        $query = $request->query->get('q');
        $reclamation = $reclamationRepository->findByNom($query);
    
        $pagination = $paginator->paginate(
            $reclamation, // Requête contenant les données à paginer (ici nos products)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );

        return $this->render('reclamationAdmin/search.html.twig', [
            'reclamations' => $pagination,
            'query' => $query,
        ]);
    }

    #[Route('/', name: 'admin_reclamation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, ReclamationRepository $reclamationRepository, PaginatorInterface $paginator): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();
            
        $query = $request->query->get('q');
        $reclamations = $reclamationRepository->findByNom($query);
    
        $pagination = $paginator->paginate(
            $reclamations, // Requête contenant les données à paginer (ici nos products)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );

        return $this->render('reclamationAdmin/index.html.twig', [
            'reclamations' => $pagination,
            'query' => $query,
        ]);
    }

    #[Route('/{id}', name: 'admin_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamationAdmin/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}', name: 'admin_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route ('/printreclamation/{id}', name: 'print_reclamation')]
    public function exportReclamationPDF($id, ReclamationRepository $repo)
    {
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf();
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);
        $reclamation = $repo->find($id);
        // dd($reclamations);

        // On génère le html
        $html = $this->renderView(
            'reclamationAdmin/print.html.twig',
            [
                'reclamation' => $reclamation
            ]
        );

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'reclamation'. $reclamation->getNom() . date('c') .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }

    #[Route ('/printallreclamations/{id}', name: 'print_reclamations')]
    public function exportAllReclamationsPDF(ReclamationRepository $repo)
    {
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);
        $reclamations = $repo->findAll();
        // dd($reclamations);

        // On génère le html
        $html = $this->renderView(
            'reclamationAdmin/printall.html.twig',
            [
                'reclamations' => $reclamations
            ]
        );

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'reclamations'. date('c') .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }
}