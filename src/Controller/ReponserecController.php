<?php

namespace App\Controller;

use App\Entity\Reponserec;
use App\Entity\Users;
use App\Form\ReponserecType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponserec')]
class ReponserecController extends AbstractController
{
    #[Route('/', name: 'app_reponserec_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->find(Users::class, 40);
        $reponserecs = $entityManager
            ->getRepository(Reponserec::class)
            ->findAll();

        foreach ($reponserecs as $key => $response) {
            if ($response->getId()->getIdUser() != $user) {
                unset($reponserecs[$key]);
            }
        }

        return $this->render('reponserec/index.html.twig', [
            'reponserecs' => $reponserecs,
        ]);
    }

    #[Route('/{reponseId}', name: 'app_reponserec_show', methods: ['GET'])]
    public function show(Reponserec $reponserec): Response
    {
        return $this->render('reponserec/show.html.twig', [
            'reponserec' => $reponserec,
        ]);
    }
}
