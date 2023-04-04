<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offre;
use App\Entity\Users;
use App\Entity\Commentaire;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\OffreRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Form\CommentaireaddType;
use App\Form\CommentaireeditType;


class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }
    #[Route('/readoc', name: 'app_readoc')]
    public function readoffre(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        // Récupération des informations à afficher grâce à une jointure entre les tables
        $result = $entityManager->getRepository(Offre::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
            ->select('t.idoffre,t.description, t.titre, t.salaireh, t2.firstName, t2.lastName,t2.srcimage')
            ->getQuery()
            ->getResult();

        return $this->render('commentaire/redo.html.twig', [
            'result' => $result,
        ]);
    }
    #[Route('/addc/{id}', name: 'app_addc')]
    public function addCommentaire(Request $request, $id): Response
    {   
        $userId = 56; 
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Commentaire::class)
            ->createQueryBuilder('t')
            ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
            ->where('t.offre = :offreId')
            ->setParameter('offreId', $id)
            ->select('t.commentaire,t2.firstName, t2.lastName,t2.srcimage,t2.id,t.idcommentaire')
            ->getQuery()
            ->getResult();
            $modifierClicked=false;
            foreach ($result as &$commentaire) {
                if ($commentaire['id'] === $userId) { 
                    $commentaire['modifier_url'] = $this->generateUrl('app_editc', 
                    ['id' => $commentaire['idcommentaire'], 'offreId' => $id,'result' => $result]);
                    $modifierClicked=true;
                }}
            
        // Création d'une nouvelle commentaire
        $Commentaire = new Commentaire();
        // Récupération de l'utilisateur courant et de son ID
        // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        $Commentaire->setUser($currentUser);
        // Récupération de l'Offre courant et de son ID
        $idoffre = $id; // l'ID de l'utilisateur courant
        $OffreRepository = $entityManager->getRepository(Offre::class);
        $currentOffre = $OffreRepository->find($idoffre);
        $Commentaire->setOffre($currentOffre);
        // Création du formulaire pour saisir les informations de l'Commentaire
        $form = $this->createForm(CommentaireaddType::class, $Commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        // Ajout des informations de l'offre et de l'utilisateur courant
        $Commentaire->setCommentaire($form->get('commentaire')->getData());
        // Ajout de l'Commentaire dans la base de données
        $entityManager->persist($Commentaire);
        $entityManager->flush();
        return $this->redirectToRoute('app_addc', ['id' => $id]);}
        return $this->renderForm("Commentaire/addc.html.twig",array("f"=>$form,"l"=>$currentOffre,'result' => $result,
        'modifierClicked'=> $modifierClicked));
    }
  
    #[Route('/editc/{id}/{offreId}', name: 'app_editc')]
    public function editCommentaire(Request $request, $id, $offreId): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Récupération de l'Commentaire à modifier
        $Commentaire = $entityManager->getRepository(Commentaire::class)->find($id);
        // Vérification si l'Commentaire existe
        if (!$Commentaire) {
            throw $this->createNotFoundException('L\'Commentaire n\'existe pas');
        }
        // Récupération de l'Offre courant et de son ID
        $OffreRepository = $entityManager->getRepository(Offre::class);
        $currentOffre = $OffreRepository->find($offreId);
        // Création du formulaire pour saisir les informations de l'Commentaire
        $form = $this->createForm(CommentaireeditType::class, $Commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Mise à jour des informations de l'Commentaire
            $Commentaire->setCommentaire($form->get('commentaire')->getData());
            // Mise à jour de l'Commentaire dans la base de données
            $entityManager->flush();
            return $this->redirectToRoute('app_readoc', ['id' => $offreId]);
        }
        return $this->renderForm("Commentaire/modc.html.twig", array("ff"=>$form, "l"=>$currentOffre
        ));
    }
}