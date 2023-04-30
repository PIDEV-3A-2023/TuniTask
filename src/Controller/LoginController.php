<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Entity\Login; ;
use App\Form\LoginType ;
use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Repository\RoleRepository;
use Symfony\Component\HttpFoundation\Request;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use MercurySeries\FlashyBundle\FlashyNotifier;
class LoginController extends AbstractController
{

    private $passwordHasher;

    public function __construct(PasswordHasher $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    #[Route('/login', name: 'app_login')]
    public function index(Request $request,UsersRepository $UsersRepository,RoleRepository $r,FlashyNotifier $flashy): Response
    {
         $login = new Login();
        
          $form= $this->createForm(LoginType::class,$login);
          $form->handleRequest($request);
              
            
          if(  $form->isSubmitted()     )
          {
              $email_user=$UsersRepository->findOneBy(['email' => $login->getEmail()]);
            //  $role=$r->findBy(['idUser' => $email_user]);
              
              //dump($email_user);
              //dump($UsersRepository->findOneBy(['id' => $email_user->getId()]));
              $password_user=$UsersRepository->findOneBy(['password' => $this->passwordHasher->hashPassword($login->getPassword())]);
              if ($email_user &&  $password_user)
                 {
                    
                    if($email_user->isStatut()==false)
                    {  //$flashy->error('You are banned!', '');
                      return $this->renderForm('login/index.html.twig', [
            'form' => $form, "test" => 'banned'
        ]);
                    }
                    else
                   {
                    $request->getSession()->set('user',$email_user);
                    $role=$r->findOneBy(['idUser'=>$email_user]);
                    $request->getSession()->set('rolename',$role->getRoleName());
                   if($role->getRoleName()=="Freelancer")
                   {
                    return $this->renderForm('FreelancerA.html.twig', [
                   'form' => $form,"test" => null
                   ]) ;}
                   else  if($role->getRoleName()=="Admin") {
                     
                   { 
                     return $this->redirectToRoute('app_admin');
                }}
                else  if($role->getRoleName()=="Client") {
                     
                   { return $this->renderForm('Client.html.twig', [
                   'form' => $form,"test" => null
                   ]) ;
                    
                }}
                 else  if($role->getRoleName()=="Organizateur") {
                     
                   { /*return $this->renderForm('admin_user/index.html.twig', [
                   'form' => $form,"test" => null
                   ]) ;*/
                     return $this->redirectToRoute('app_admin');
                }}
                  else {
                     
                   { /*return $this->renderForm('admin_user/index.html.twig', [
                   'form' => $form,"test" => null
                   ]) ;*/
                     return $this->redirectToRoute('app_admin');
                }}
                   }

       
    }} return $this->renderForm('login/index.html.twig', [
            'form' => $form, "test" => null
        ]);}
     /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/google", name="connect_google_start")
     * @param ClientRegistry $clientRegistry
     * @return \Symfony\Component\HttpFundation\RedirctResponse
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        // on Symfony 3.3 or lower, $clientRegistry = $this->get('knpu.oauth2.registry');

        // will redirect to google!
        return $clientRegistry
            ->getClient('google') // key used in config/packages/knpu_oauth2_client.yaml
            ->redirect();
    }

    /**
     * After going to Facebook, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @Route("/google", name="connect_google_check")
     * @return \Symfony\Component\HttpFundation\RedirctResponse
     */
    public function connectCheckAction(Request $request)
    {
       return $this->redirectToRoute('app_login');
    }
    
}
