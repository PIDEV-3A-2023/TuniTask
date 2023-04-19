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
class UserController extends AbstractController
{
    private $passwordHasher;
    private $session;
    public function __construct(PasswordHasher $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
        $this->session = new Session();
        $this->session->start();
       
    }
    #[Route('/', name: 'app_user')]
    public function index(MailerInterface $mailer): Response
    {
       /* $content=rand();
                      $message = (new Email())
            ->from('abdessalam.bahri@esprit.tn')
            ->to('abdessalam.bahri@esprit.tn')
            ->subject("Verifate your account")
            ->text("this is your verification code" . $content);

        $mailer->send($message);*/
        return $this->render('index.html.twig');
    }

   
        #[Route('/AddUser', name: 'Add_user')]
    public function addUser(ManagerRegistry $doctrine,Request $request,MailerInterface $mailer): Response
    {
         
        
       $user = new Users();
       $role= new Role();
       $form= $this->createForm(UsersType::class);
       
        $form->handleRequest($request);
        $form1= $this->createForm(RoleType::class,$role);
        $form1->handleRequest($request);
        if(  $form->isSubmitted()  )
        if($form->isValid())
        {
            
        // $session = $this->requestStack->getSession();
            $whoYouAre = $form->get('Who_you_are')->getData();
                 dump($whoYouAre);
                  
                    //$user->setPassword($form->get('password')->getData()):
                        $pwd=$form->get('password')->getData();
                        
                        $user->setPassword($this->passwordHasher->hashPassword($pwd));
                       $user->setEmail($form->get('email')->getData()); 
                       $user->setFirstName($form->get('firstName')->getData()); 
                       $user->setLastName($form->get('lastName')->getData()); 
                       $user->setDateOfBirth($form->get('dateOfBirth')->getData());
                      $user->setSrcimage('test');
                      $user->setStatut(true);
                      $user->setEtat(true);
                      $user->setCreatedAt();
                         //Action d'ajout
                      $em =$doctrine->getManager() ;
                      $em->persist($user);
                     $this->session->set('user', $user);
                      $this->session->set('roleN', $whoYouAre);
                      $em->flush();
                     
             return $this->renderForm('addusers.html.twig', ['form' => $form1,
            "role" => $whoYouAre
            ]);
        }
          if(  $form1->isSubmitted() )
        {
            $this->session->get('user')->setSrcimage($this->session->get('filename'));
         // dump($this->session->get('user'));
              
              $role->setRoleName($this->session->get('roleN'));
                //dump($role);
               
                 
                       $u=$this->getDoctrine()->getRepository(Users::class);
                       
         $user=$u->findOneBy(['email' => $this->session->get('user')->getEmail()]);
         $role->setIdUser($user);
          
                        $em1 =$doctrine->getManager() ;
                      $em1->persist($role);

                     $em1->flush();
                     
     file_put_contents($this->session->get('filepath'),$this->session->get('decodedImage'));
                      /*$content=rand();
                      $message = (new Email())
            ->from('abdessalam.bahri@esprit.tn')
            ->to('abdessalam.bahri@esprit.tn')
            ->subject("Verifate your account")
            ->text("this is your verification code" . $content);

        $mailer->send($message);*/
               return $this->renderForm('addusers.html.twig', ['form' => $form1,
            "role" => "email"
        ]);
                      

        }
        
      
         return $this->renderForm('addusers.html.twig', ['form' => $form,"role" => null]);

    }

     #[Route('/updateUser/{id}', name: 'app_update')]
  public function updateC($id,UsersRepository $userR,
  ManagerRegistry $doctrine,Request $request)
               {
      //récupérer la classe à modifier
     
      
      $user=$userR->find($id);
      
      
      
      dump($user);
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
    $this->session->set('filepath', $filepath);
                      $this->session->set('decodedImage', $decodedImage);
                      $this->session->set('filename', $filename);
    file_put_contents($filepath,$decodedImage);

    // Return a response indicating that the image was uploaded successfully
    return new Response('Image uploaded successfully', Response::HTTP_OK);
}


                                }
