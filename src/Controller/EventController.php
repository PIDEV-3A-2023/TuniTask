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
use DateTime;
use DateTimeImmutable;
use DateTimeInterface;

class EventController extends AbstractController
{
    #[Route('/admin/event', name: 'event', methods: ['GET'])]
    public function view(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findAll();
        $evts = [];

        foreach ($events as $event) {
            $evts[] = [
                'id' => $event->getId(),
                'date' => $event->getDate()->format('Y-m-d H:i:s'),
                'type' => $event->getNom(),
                'event' => $event->getNom() . ' | ' . $event->getNbrPlace(),
                'start' => $event->getDate()->format('Y-m-d H:i:s'),
                'end' => $event->getDate()->format('Y-m-d H:i:s'),
                'title' => $event->getNom() . ' | ' . $event->getNbrPlace(),
                'description' => $event->getLieu(),
                'backgroundColor' => $event->getNom(),
                'borderColor' => $event->getNom(),
                'textColor' => $event->getNom(),
                'allDay' => $event->getNom(),
            ];
        }

        $data = json_encode($evts);
        return $this->render('event/index.html.twig', [
            'event' => $events,
            'data' => $data
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

            $this->addFlash('notice','Event created!');

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

            $this->addFlash('notice','Event updated!');
            
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

        $this->addFlash('notice','Event deleted!');

        return $this->redirectToRoute('event');
    }

    /**
     * @Route("/api/{id}/edit", name="api_event_edit", methods={"PUT"})
     */
    public function majEvent(?Event $event, ManagerRegistry $doctrine, Request $request)
    {
        $donnees = json_decode($request->getContent());

        if (
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->description) && !empty($donnees->description) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->borderColor) && !empty($donnees->borderColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor)
        ) {
            $code = 200;

            if(!$event) {
                $event = new Event;

                $code = 201;
            }

            // $event->setNom($donnees->title);
            // $event->setLieu($donnees->description);
            $dateTime = new DateTime($donnees->date);
            // dd($dateTime);
            $dateTimeInterface = DateTimeImmutable::createFromMutable($dateTime);
            // dd($dateTimeInterface);
            $event->setDate($dateTimeInterface);
            

            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();

            $this->addFlash('notice','Event Date updated!');

            return new Response('OK', $code);
                
        } else {
            return new Response('Données incomplètes', 404);
        }
    }

}
