<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Entity\Login; ;
use App\Form\LoginType ;
use App\Repository\UsersRepository;
use App\Repository\RoleRepository;
use Symfony\Component\HttpFoundation\Request;
class LoginController extends AbstractController
{

    private $passwordHasher;

    public function __construct(PasswordHasher $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    #[Route('/login', name: 'app_login')]
    public function index(Request $request,UsersRepository $UsersRepository,RoleRepository $r): Response
    {
         $login = new Login();
        
          $form= $this->createForm(LoginType::class,$login);
          $form->handleRequest($request);
              
            
          if(  $form->isSubmitted()     )
          {
            dump("ok");
            /*
            
           
        
           $email_user=$UsersRepository->findOneBy(['email' => $login->getEmail()]);
            dump($email_user);
            dump($r->SelectById($email_user->getId()));
          $password_user=$UsersRepository->findOneBy(['password' => $this->passwordHasher->hashPassword($login->getPassword())]);
           
          
        
        if ($email_user &&  $password_user)
        {
            if($r->SelectById($email_user->getId())=="Freelancer")
           { return $this->renderForm('FreelancerA.html.twig', [
            'form' => $form,"test" => true
        ]) ;}
        else {
            dump("ah ya baba");
        }



        }
        else{
        return $this->renderForm('login/index.html.twig', [
            'form' => $form,"test" => true
        ]);}*/}


        return $this->renderForm('login/index.html.twig', [
            'form' => $form, "test" => null
        ]);
    }
    
}
