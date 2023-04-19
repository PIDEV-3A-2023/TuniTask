<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
class AdminUserController extends AbstractController
{
    #[Route('/admin/user', name: 'app_admin_user')]
    public function index(): Response
    {
        return $this->render('admin_user/index.html.twig', [
            'controller_name' => 'AdminUserController',
        ]);
    }
            #[Route('/Admin', name: 'app_admin')]
    public function list(UsersRepository $UsersRepository): Response
    {
        //$repository = $entityManager->getRepository(Role::class);
        $users = $UsersRepository->findAll();
        return $this->render("admin_user/index.html.twig",[
            'users'=>$users
        ]);
    }
              #[Route('/Block{id}', name: 'app_Block')]
    public function Block($id,UsersRepository $UsersRepository,EntityManagerInterface $entityManager): Response
    {
        //$repository = $entityManager->getRepository(Role::class);
        //$r=$this->getDoctrine()->getRepository(Users::class);
        
        $etat = $UsersRepository->statut($id);
        if($etat==0)
        $statut=1;
        else
        $statut=0;
        dump($statut);
          $query = $entityManager->createQuery(
        'UPDATE App\Entity\Users u
        SET u.statut = :newStatut
        WHERE u.id = :userId'
    )
    ->setParameter('newStatut', $statut)
    ->setParameter('userId', $id);

    $numUpdated = $query->execute();
    $users = $UsersRepository->findAll();
        return $this->render("admin_user/index.html.twig",[
            'users'=>$users
        ]);
    }
}
