<?php

namespace App\Controller;

use App\Repository\DemandeRepository;
use App\Repository\PropositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Proposition;
use App\Entity\Demande;
use App\Entity\Users;
use App\Form\AddPropositionType;
use Doctrine\ORM\EntityManagerInterface;
use Twilio\Rest\Client;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\JsonResponse;



class PropositionController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }



    #[Route('/proposition', name: 'app_proposition')]
    public function index(): Response
    {
        return $this->render('proposition/index.html.twig', [
            'controller_name' => 'PropositionController',
        ]);
    }


  

        #[Route('/readProposition', name: 'app_readP')]
        public function readProposition(): Response
        {
            $entityManager = $this->getDoctrine()->getManager();
             //Récupération de l'utilisateur courant
            $userId = 41; // l'ID de l'utilisateur courant
            $userRepository = $entityManager->getRepository(Users::class);
            $currentUser = $userRepository->find($userId);
            // Récupération des offres de l'utilisateur courant
       $propositions = $entityManager->getRepository(Proposition::class)
                ->createQueryBuilder('t')
                ->leftJoin(Users::class, 't1', 'WITH', 't1.id = t.idFreelancer')
                ->leftJoin(Demande::class, 't2', 'WITH', 't2.id = t.idDemande')
                ->where('t.idFreelancer = :userId')
                ->setParameter('userId', $currentUser->getId())
                //->select('t.id, t2.id as idDemande, t1.firstName, t1.lastName, t1.email')
                ->select('t.id, t2.titre, t1.firstName, t1.lastName, t1.email')
                ->getQuery()
                ->getResult();
                return $this->render('Proposition/readP.html.twig', [
                     'p' => $propositions,
                ]);
             }

    #[Route('/deleteProposition/{id}', name: 'app_deleteP')]
    public function deleteProposition($id, PropositionRepository $rep, 
    ManagerRegistry $doctrine): Response
    {
        //récupérer la classe à supprimer
        $proposition=$rep->find($id);


        //Action de suppression
        //récupérer l'Entite manager
        $em=$doctrine->getManager();
        $em->remove($proposition);
        
        $em->flush();
        return $this->redirectToRoute('app_readP');
    }

   
  #[Route('/addProposition/{idDemande}', name:'add_proposition')]
 
  public function add_proposition($idDemande,Request $request , DemandeRepository $DemandeRepository , PropositionRepository $PropositionRepository ): Response
   {
       
   
       // Create a new proposition object and associate it with the demand
       $proposition = new Proposition();
       $demande = $this->entityManager->getRepository(Demande::class)->find($idDemande);
       $proposition->setIdDemande($demande);
       $user= $this->entityManager->getRepository(Users::class)->find(41);
       $proposition->setIdFreelancer($user);
       $form = $this->createForm(AddPropositionType::class,$proposition);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid())
       {
        $this->entityManager->persist($proposition);
        $this->entityManager->flush();
        return $this->redirectToRoute('app_readP', [], Response::HTTP_SEE_OTHER);
       }
       // Persist the new proposition object in the database
       
   
       // Redirect back to the list of demands
       return $this->renderForm('proposition/add_proposition.html.twig',['prop'=>$proposition,'form'=>$form]);


   }

   #[Route('/addProposition/{idDemande}/sendVerificationCode', methods: ['POST'])]
  public function sendVerificationCode(Request $request)
  {

    $phoneNumber = '+21622495578';



  
      $session = $request->getSession();
  
      $sid = 'AC612246f81a50ebe4b07c556da16fb0c6';
      $token = '6a7e0c0742c1c6436d04e42b54952294';
      $client = new Client($sid, $token);
  
      $message = $client->messages->create(
          $phoneNumber, 
          array(
              'from' => '+15675871436', 
              'body' => 'votre proposition a été ajouté avec succées ' 
          )
      );
  
      return new JsonResponse(['success' => true]);
  }






    }

