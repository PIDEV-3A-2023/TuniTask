<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Session\Session;
class AdminUserController extends AbstractController
{
    
    private $session;
    public function __construct(PasswordHasher $passwordHasher)
    {
       

        
       
    }
    #[Route('/admin/user', name: 'app_admin_user')]
    public function index(): Response
    {
        return $this->render('admin_user/index.html.twig', [
            'controller_name' => 'AdminUserController',
        ]);
    }
           #[Route('/AdminB', name: 'app_adminb')]
    public function listB(UsersRepository $UsersRepository,PaginatorInterface $paginator,Request $req,FlashyNotifier $flashy): Response
    {
          
        //$repository = $entityManager->getRepository(Role::class);
    
      $flashy->success('User\'s status has been modified with succes!', '');
     
        $user = $UsersRepository->findAll();
         $users = $paginator->paginate(
            $user, /* query NOT result */
            $req->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render("admin_user/index.html.twig",[
            'users'=>$users
        ]);
    }
    #[Route('/staic', name: 'app_static')]
       public function static(UsersRepository $UsersRepository,RoleRepository $RoleRepository,Request $req,FlashyNotifier $flashy): Response
    {
         $flashy->info('Enjoy with some statistics!', '');
        $user= $UsersRepository->findAll();
        $role = $RoleRepository->findAll();
        return $this->render("admin_user/statistic.html.twig",[
            'roles'=>$role,'users'=>$user
        ]);
    }
            #[Route('/Admin', name: 'app_admin')]
    public function list(UsersRepository $UsersRepository,PaginatorInterface $paginator,Request $req,FlashyNotifier $flashy): Response
    {
          
        //$repository = $entityManager->getRepository(Role::class);
    
      $flashy->primary('There are some users, be responsible !', '');
     
        $user = $UsersRepository->findAll();
         $users = $paginator->paginate(
            $user, /* query NOT result */
            $req->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render("admin_user/index.html.twig",[
            'users'=>$users
        ]);
    }
              #[Route('/Block{id}', name: 'app_Block')]
    public function Block($id,UsersRepository $UsersRepository,EntityManagerInterface $entityManager,PaginatorInterface $paginator,Request $req,FlashyNotifier $flashy): Response
    {
        //$repository = $entityManager->getRepository(Role::class);
        //$r=$this->getDoctrine()->getRepository(Users::class);
        
        $etat = $UsersRepository->statut($id);
        if($etat==0)
        $statut=1;
        else
        $statut=0;
        
          $query = $entityManager->createQuery(
        'UPDATE App\Entity\Users u
        SET u.statut = :newStatut
        WHERE u.id = :userId'
    )
    ->setParameter('newStatut', $statut)
    ->setParameter('userId', $id);

    $numUpdated = $query->execute();
    /* //$repository = $entityManager->getRepository(Role::class);
        $user = $UsersRepository->findAll();
         $users = $paginator->paginate(
            $user, /* query NOT result */
           // $req->query->getInt('page', 1)/*page number*/,
            //5/*limit per page*/
        /*);
        return $this->render("admin_user/index.html.twig",[
            'users'=>$users
        ]);*/
        
        return $this->redirectToRoute('app_adminb');
    }
}
