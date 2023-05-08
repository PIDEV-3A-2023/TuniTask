<?php

namespace App\Controller\serializable;

use App\Entity\Event;
use App\Entity\Reservation;
use App\Repository\EventRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/mobile/event')]
class EventMobileController extends AbstractController
{
   #[Route('/', name: 'afficheevent')]
    public function index(EventRepository $eventRepository,NormalizerInterface $normlizer): Response
    {
        $events = $eventRepository->findAll();
         
         $evNor=$normlizer->serialize($events,'json',['groups' => 'events','include' => ['reservation']]);
        $json=json_encode($evNor);
        return new Response( $evNor);

    
    }

    /**
     * @Route("/add", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $event = new Event();


        $file = $request->files->get("file");
        if ($file) {
            $imageFileName = md5(uniqid()) . '.' . $file->guessExtension();
            try {
                $file->move($this->getParameter('image_directory'), $imageFileName);
            } catch (FileException $e) {
                dd($e);
            }
        } else {
            if ($request->get("image")) {
                $imageFileName = $request->get("image");
            } else {
                $imageFileName = "null";
            }
        }

        $event->constructor(
            $request->get("nom"),
            DateTime::createFromFormat("d-m-Y", $request->get("date")),
            $request->get("lieu"),
            (int)$request->get("nbrPlace"),
            $imageFileName
        );

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($event);
        $entityManager->flush();

        return new JsonResponse($event, 200);


    }

    /**
     * @Route("/edit", methods={"POST"})
     */
    public function edit(Request $request, EventRepository $eventRepository): Response
    {
        $event = $eventRepository->find((int)$request->get("id"));

        if (!$event) {
            return new JsonResponse(null, 404);
        }


        $file = $request->files->get("file");
        if ($file) {
            $imageFileName = md5(uniqid()) . '.' . $file->guessExtension();
            try {
                $file->move($this->getParameter('image_directory'), $imageFileName);
            } catch (FileException $e) {
                dd($e);
            }
        } else {
            if ($request->get("image")) {
                $imageFileName = $request->get("image");
            } else {
                $imageFileName = "null";
            }
        }

        $event->constructor(
            $request->get("nom"),
            DateTime::createFromFormat("d-m-Y", $request->get("date")),
            $request->get("lieu"),
            (int)$request->get("nbrPlace"),
            $imageFileName
        );

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($event);
        $entityManager->flush();

        return new JsonResponse($event, 200);
    }

    /**
     * @Route("/delete/{id}", methods={"GET"})
     */
    public function delete($id,Request $request, EntityManagerInterface $entityManager, EventRepository $eventRepository): JsonResponse
    {
        $event = $eventRepository->find($id);

        if (!$event) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($event);
        $entityManager->flush();

        return new JsonResponse([], 200);
    }


    /**
     * @Route("/image/{image}", methods={"GET"})
     */
    public function getPicture(Request $request): BinaryFileResponse
    {
        return new BinaryFileResponse(
            $this->getParameter('image_directory') . "/" . $request->get("image")
        );
    }

}
