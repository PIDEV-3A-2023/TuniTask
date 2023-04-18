<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Event;
use App\Form\ActivityType;
use App\Form\AddEventType;
use App\Repository\ActivityRepository;
use App\Repository\EventRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class EventController extends AbstractController
{
    #[Route('/admin/event', name: 'event', methods: ['GET'])]
    public function view(EventRepository $eventRepository): Response
    {
        return $this->render('event/index.html.twig', [
            'event' => $eventRepository->findAll(),
        ]);
    }

    #[Route('/event', name: 'eventList', methods: ['GET'])]
    public function viewFront(EventRepository $eventRepository): Response
    {
        return $this->render('event/events_list.html.twig', [
            'event' => $eventRepository->findAll(),
        ]);
    }


    #[Route('/newEvent', name: 'newEvent', methods: ['GET', 'POST'])]
    public function newEvent(Request $request, EventRepository $eventRepository,SluggerInterface $slugger): Response
    {
        $event = new Event();
        $form = $this->createForm(AddEventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $eventImage */
            $eventImage = $form->get('image')->getData();

            // this condition is needed because the 'eventImage' field is not required
            // so the Image file must be processed only when a file is uploaded
            if ($eventImage) {
                $originalFilename = pathinfo($eventImage->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $eventImage->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $eventImage->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'eventImage' property to store the image file name
                // instead of its contents
                $event->setImage($newFilename);
            }
            $eventRepository->save($event, true);
            return $this->redirectToRoute('event', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('event/add_event.html.twig', ['form' => $form]);
    }



    #[Route('updateEvent/{id}', name: 'updateEvent')]
    public function updateEvent(ManagerRegistry $doctrine,$id,Request $req,SluggerInterface $slugger): Response {
        $em = $doctrine->getManager();
        $event = $doctrine->getRepository(Event::class)->find($id);
        $form = $this->createForm(AddEventType::class,$event);
        $form->handleRequest($req);
        if($form->isSubmitted()){
            /** @var UploadedFile $eventImage */
            $eventImage = $form->get('image')->getData();

            // this condition is needed because the 'eventImage' field is not required
            // so the Image file must be processed only when a file is uploaded
            if ($eventImage) {
                $originalFilename = pathinfo($eventImage->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $eventImage->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $eventImage->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'eventImage' property to store the image file name
                // instead of its contents
                $event->setImage($newFilename);
            }
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('event');
        }
        return $this->renderForm('event/add_event.html.twig',['form'=>$form]);

    } 
    #[Route('deleteEvent/{id}', name: 'deleteEvent')]
    public function deleteEvent(ManagerRegistry $doctrine,$id): Response
    {
        $em= $doctrine->getManager();
        $S= $doctrine->getRepository(Event::class)->find($id);
        $em->remove($S);
        $em->flush();
        return $this->redirectToRoute('event');
    }

   
}
