<?php

namespace App\Controller\serializable;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Repository\RoleRepository;
use App\Controller\PasswordHasher ;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Role;
use App\Entity\Users;
class ControleJsonController extends AbstractController
{
      private $passwordHasher;

    
    public function __construct(PasswordHasher $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
       
      
       
    }
    #[Route('/controle/json/userlist', name: 'app_controle_json')]
    public function user(UsersRepository $UsersRepository, NormalizerInterface $normlizer): Response
    {
        $user=$UsersRepository->findAll();
        $userNor=$normlizer->normalize($user,'json');
        $json=json_encode($userNor);
        return new Response($json);
    }
         #[Route('/controle/json/roles', name: 'app_role_json')]
    public function role(UsersRepository $UsersRepository, NormalizerInterface $normlizer,RoleRepository $RoleRepository): Response
    {
    
        $role = $RoleRepository->findAll();
        
       
        $roleNor=$normlizer->normalize($role,'json');
        $json=json_encode($roleNor);
 
        return new Response($json);
    }
       #[Route('/controle/json/connect/{email}/{pwd}', name: 'app_connect_json')]
    public function connect($email,$pwd,UsersRepository $UsersRepository, NormalizerInterface $normlizer,RoleRepository $RoleRepository): Response
    {
        $user=$UsersRepository->findBy(['password'=>$this->passwordHasher->hashPassword($pwd),'email'=> $email]);
        if ($user==null)
        {return new JsonResponse(['connect'=> 'error']);}
        $role = $RoleRepository->findOneBy(['idUser'=>$user]);
        
        $userNor=$normlizer->normalize($user,'json');
        $roleNor=$normlizer->normalize($role,'json');
        $json=json_encode($roleNor);
 
        return new Response($json);
    }
            #[Route('/controle/json/inscrit/{firstName}/{lastName}/{email}/{day}/{month}/{year}/{confirmPassword}/{selectedRole}', name: 'Add_user')]
    public function addUser($firstName,$lastName,$email,$day,$month,$year,$confirmPassword,$selectedRole,ManagerRegistry $doctrine): Response
    {
      
       $role= new Role();
        $user= new Users() ;
       try{
         
                        $user->setPassword($this->passwordHasher->hashPassword($confirmPassword));
                       $user->setEmail($email); 
                       $user->setFirstName($firstName); 
                       $user->setLastName($lastName);
   

$dateOfBirth = new \DateTime("$year-$month-$day");
    $user->setDateOfBirth($dateOfBirth);
                      $user->setSrcimage('logo.png');
                      $user->setStatut(true);
                      $user->setEtat(true);
                      $user->setCreatedAt();
                      //$this->session->get('user')->setSrcimage($this->session->get('filename'));
                      //file_put_contents($filepath,$decodedImage);
                         //Action d'ajout
                      $em =$doctrine->getManager() ;
                      $em->persist($user);
                     //$this->session->set('user', $user);
                      //$this->session->set('roleN', $whoYouAre);
                     // file_put_contents($this->session->get('filepath'),$this->session->get('decodedImage'));
                      $em->flush();
                       $role->setRoleName($selectedRole);
                       $role->setIdUser($user);
                       $em->persist($role);
                       $em->flush();
       }
       catch(\Exception $e){
             $data = [
        'inscription' => 'error'
    ];
         $response = new JsonResponse($data);

    return $response;     
       }
        $data = [
        'inscription' => 'ok'
    ];
    $response = new JsonResponse($data);

    return $response;   
}
    #[Route('json/user/update/{id}/{firstName}/{lastName}/{email}/{confirmPassword}', name: 'app_user_edit')]
public function edit( $id,$firstName,$lastName,$email,$confirmPassword,ManagerRegistry $doctrine)
    {
        try{
        $em = $doctrine->getManager() ;
        $user = $em->getRepository(Users::class)->find($id);

        
         $user->setFirstName($firstName); 
        $user->setEmail($email); 
                       $user->setFirstName($firstName); 
                       $user->setLastName($lastName);
                       if ($user->getPassword() != $confirmPassword )
                        $user->setPassword($this->passwordHasher->hashPassword($confirmPassword));

        $em->persist($user);
        $em->flush();
        
        }
        catch(\Exception ){
        
         $data = [
        'update' => 'error'
    ];
        }
       $data = [
        'update' => 'ok'
    ];
    $response = new JsonResponse($data);

    return $response;   
    }

}