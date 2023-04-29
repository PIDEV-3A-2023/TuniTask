<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offre;
use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\OffreRepository;

use App\Form\OffreformType;
use App\Form\EditoffreformType;

class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }

    #[Route('/reado', name: 'app_reado')]
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

        return $this->render('Offre/redo.html.twig', [
            'result' => $result,
        ]);
    }

    #[Route('/readou', name: 'app_readou')]
        public function readuoffre(Request $request): Response
        {
            $entityManager = $this->getDoctrine()->getManager();
            // Récupération de l'utilisateur courant
            $userId = $request->getSession()->get('user')->getId(); // l'ID de l'utilisateur courant
            $userRepository = $entityManager->getRepository(Users::class);
            $currentUser = $userRepository->find($userId);
            // Récupération des offres de l'utilisateur courant
            $result = $entityManager->getRepository(Offre::class)
                ->createQueryBuilder('t')
                ->leftJoin(Users::class, 't2', 'WITH', 't2.id = t.user')
                ->where('t.user = :userId')
                ->setParameter('userId', $currentUser->getId())
                ->select('t.idoffre,t.description, t.titre, t.salaireh, t2.firstName, t2.lastName,t2.srcimage')
                ->getQuery()
                ->getResult();

            return $this->render('Offre/readou.html.twig', [
                'result' => $result,
            ]);
        }

    #[Route('/addo', name: 'app_addo')]
    public function addOffre(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Création d'une nouvelle offre
        $offre = new Offre();
        // Récupération de l'utilisateur courant et de son ID
        $userId = $request->getSession()->get('user')->getId(); // l'ID de l'utilisateur courant
        $userRepository = $entityManager->getRepository(Users::class);
        $currentUser = $userRepository->find($userId);
        $offre->setUser($currentUser);
        // Création du formulaire pour saisir les informations de l'offre
        $form = $this->createForm(OffreformType::class, $offre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        // Ajout des informations de l'offre et de l'utilisateur courant
        $offre->setDescription($form->get('description')->getData());
        $offre->setTitre($form->get('titre')->getData());
        $offre->setSalaireh($form->get('salaireh')->getData());
        // Ajout de l'offre dans la base de données
        $entityManager->persist($offre);
        $entityManager->flush();
        return $this->redirectToRoute('app_readou');}
        return $this->renderForm("Offre/addo.html.twig",array("f"=>$form));
    }

    #[Route('/edito/{id}', name: 'app_edito')]
        public function editOffre(Request $request, $id): Response
        {
            $entityManager = $this->getDoctrine()->getManager();
            // Récupération de l'offre à modifier
            $offre = $entityManager->getRepository(Offre::class)->find($id);
            // Vérification si l'offre existe
            if (!$offre) {
                throw $this->createNotFoundException('L\'offre n\'existe pas');
            }
            // Création du formulaire pour saisir les informations de l'offre
            $form = $this->createForm(EditoffreformType::class, $offre);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // Mise à jour des informations de l'offre
                $offre->setDescription($form->get('description')->getData());
                $offre->setTitre($form->get('titre')->getData());
                $offre->setSalaireh($form->get('salaireh')->getData());
                // Mise à jour de l'offre dans la base de données
                $entityManager->flush();
                return $this->redirectToRoute('app_readou');
            }
            return $this->renderForm("Offre/edito.html.twig",array("f"=>$form));
        }

        #[Route('/deleteo/{id}', name: 'app_deleteo')]
            public function deleteOffre($id): Response
            {
                $entityManager = $this->getDoctrine()->getManager();

                // Recherche de l'offre à supprimer
                $offreRepository = $entityManager->getRepository(Offre::class);
                $offre = $offreRepository->find($id);

                // Vérification que l'offre existe
                if (!$offre) {
                    throw $this->createNotFoundException('Aucune offre trouvée pour cet ID : '.$id);
                }

                // Suppression de l'offre
                $entityManager->remove($offre);
                $entityManager->flush();

                return $this->redirectToRoute('app_readou');
            }
}
