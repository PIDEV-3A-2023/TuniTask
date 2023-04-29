<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Repository\RoleRepository;
use App\Entity\Role;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormRenderer;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users ;
use App\Controller\PasswordHasher ;
use App\Form\UsersType;
use App\Form\RoleType;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Controller\Api\ApiImage;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use MercurySeries\FlashyBundle\FlashyNotifier;
class UserController extends AbstractController
{
    private $passwordHasher;

    private $user;
    public function __construct(PasswordHasher $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
       
        $this->user = new Users();
       
    }
    #[Route('/', name: 'app_user')]
    public function index(MailerInterface $mailer,FlashyNotifier $flashy,Request $request): Response
    {
       
       /* $content=rand();
                      $message = (new Email())
            ->from('abdessalam.bahri@esprit.tn')
            ->to('abdessalam.bahri@esprit.tn')
            ->subject("Verifate your account")
            ->text("this is your verification code" . $content);

        $mailer->send($message);*/
        //$flashy->success('Welcome to our app!', '');
        $request->getSession()->clear();
        return $this->render('index.html.twig');
    }

   
        #[Route('/AddUser', name: 'Add_user')]
    public function addUser(ManagerRegistry $doctrine,Request $request,MailerInterface $mailer,FlashyNotifier $flashy): Response
    {
         
        
       
        //$this->session->set('user', $user);
       $role= new Role();
       $form= $this->createForm(UsersType::class);
       
        $form->handleRequest($request);
        
        
        if(  $form->isSubmitted()  )
        if($form->isValid())
        {
            
        // $session = $this->requestStack->getSession();
            $whoYouAre = $form->get('Who_you_are')->getData();
                
                  
                    //$user->setPassword($form->get('password')->getData()):
                        $pwd=$form->get('password')->getData();
                        
                        $this->user->setPassword($this->passwordHasher->hashPassword($pwd));
                       $this->user->setEmail($form->get('email')->getData()); 
                       $this->user->setFirstName($form->get('firstName')->getData()); 
                       $this->user->setLastName($form->get('lastName')->getData()); 
                       $this->user->setDateOfBirth($form->get('dateOfBirth')->getData());
                      $this->user->setSrcimage($this->session->get('filename'));
                      $this->user->setStatut(true);
                      $this->user->setEtat(true);
                      $this->user->setCreatedAt();
                      //$this->session->get('user')->setSrcimage($this->session->get('filename'));
                      //file_put_contents($filepath,$decodedImage);
                         //Action d'ajout
                      $em =$doctrine->getManager() ;
                      $em->persist($this->user);
                     //$this->session->set('user', $user);
                      $this->session->set('roleN', $whoYouAre);
                      file_put_contents($this->session->get('filepath'),$this->session->get('decodedImage'));
                      $em->flush();
                       $role->setRoleName($whoYouAre);
                       $role->setIdUser($this->user);
                       $em->persist($role);
                       $em->flush();
                       
                     /*$content=rand();
                      $message = (new Email())
            ->from('abdessalam.bahri@esprit.tn')
            ->to('abdessalam.bahri@esprit.tn')
            ->subject("Verifate your account")
            ->text("this is your verification code" . $content);

        $mailer->send($message);*/
           return $this->renderForm('addusers.html.twig', ['form' => $form,"role" => null]);
        }
         
        
      
         return $this->renderForm('addusers.html.twig', ['form' => $form,"role" => null]);

    }




     #[Route('/updateUser/{id}', name: 'app_update')]
  public function updateC($id,UsersRepository $userR,
  ManagerRegistry $doctrine,Request $request)
               {
      //récupérer la classe à modifier
     
      
      $user=$userR->find($id);
      
      
      
      
    $form=$this->createForm(UsersType::class,$user);
                 $form->handleRequest($request);
                if($form->isSubmitted()){
             //Action de MAJ
                 $em =$doctrine->getManager() ;
                $em->flush();
             
                       }
        return $this->renderForm("addusers.html.twig",
                                      array("form"=>$form),);
                                  }



/**
 * @Route("/api/images", name="image_user", methods={"POST"})
 */
public function uploadImage(Request $request): Response
{
  
    $data = json_decode($request->getContent(), true);
    $imageData = $data['image'];
    $filename = "logo.png";
    // Decode the base64-encoded image data
   $decodedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));

    // Generate a unique filename for the image
    $filename = uniqid() . '.png';

    // Save the image file to the specified directory
    $filepath = 'C:/xampp/htdocs/img/' . $filename;
    //$user=$this->session->get('user');
    $this->user->setSrcimage($filename);
                    $this->session->set('filepath', $filepath);
                      $this->session->set('decodedImage', $decodedImage);
                      $this->session->set('filename', $filename);
    //file_put_contents($filepath,$decodedImage);

    // Return a response indicating that the image was uploaded successfully
    return new Response('Image uploaded successfully', Response::HTTP_OK);
}


                                }
