<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Event;
use App\Entity\Users;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\EventRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use App\Services\QrcodeService;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository, UsersRepository $userRepository,Request $request): Response
    {
           $user = $userRepository->find( $user = $request->getSession()->get('user')->getId());
        $reservations = $reservationRepository->findAll();

        foreach ($reservations as $key => $reservation) {
            if ($reservation->getUser() != $user) {
                unset($reservations[$key]);
            }
        }

        $rsrvs = [];

        foreach ($reservations as $reservation) {
            $rsrvs[] = [
                'id' => $reservation->getId(),
                'date' => $reservation->getDate()->format('Y-m-d H:i:s'),
                'type' => $reservation->getEvent()->getNom(),
                'event' => $reservation->getEvent()->getNom(),
                'start' => $reservation->getDate()->format('Y-m-d H:i:s'),
                'end' => $reservation->getDate()->format('Y-m-d H:i:s'),
                'title' => $reservation->getEvent()->getNom() . ' | ' . $reservation->getNbRes(),
                'description' => $reservation->getEvent()->getNom(),
                'backgroundColor' => $reservation->getEvent()->getNom(),
                'borderColor' => $reservation->getEvent()->getNom(),
                'textColor' => $reservation->getEvent()->getNom(),
                'allDay' => $reservation->getEvent()->getNom(),
            ];
        }

        $data = json_encode($rsrvs);

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
            'data' => $data
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReservationRepository $reservationRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation, Request $request, QrcodeService $qrcodeService): Response
    {
        $qrCode = null;
        //$qrCode = $qrcodeService->qrcode($reservation->getEvent()->getNom() . ' | ' . $reservation->getEvent()->getDate()->format('Y-m-d'));
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
            'qrCode' => $qrCode
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, ReservationRepository $reservationRepository, EventRepository $eventRepository): Response
    {
        $nbrePlacesChoisiBefore = $reservation->getNbRes();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        // dd($nbrePlacesChoisiBefore);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $now = new DateTime();
            $nbrePlacesChoisi = $reservation->getNbRes();
            // dd($nbrePlacesChoisi);
            $diff = $nbrePlacesChoisi - $nbrePlacesChoisiBefore;
            // dd($diff);
            $event = $reservation->getEvent();
            $nbrePlacesDispo = $event->getNbrPlace();
            $event->setNbrPlace($nbrePlacesDispo - $diff);
            $reservation->setDate($now);
            $eventRepository->save($event, true);
            $reservationRepository->save($reservation, true);

            $this->addFlash('notice','Réservation mise à jour avec success!');

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $reservationRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/send', name: 'app_reservation_send', methods: ['GET', 'POST'])]
    public function sendReservation(Request $request, ReservationRepository $reservationRepository, UsersRepository $userRepository, Event $event): Response
    {
        $reservation = new Reservation();
        $user = $userRepository->find( $user = $request->getSession()->get('user')->getId());
        // dd($user);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new DateTime();
            $nbrePlacesChoisi = $reservation->getNbRes();
            $nbrePlacesDispo = $event->getNbrPlace();
            
            if($nbrePlacesChoisi > $nbrePlacesDispo) {
                return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
            }
            
            $reservation->setDate($now);
            $reservation->setUser($user);
            $reservation->setEvent($event);
            $event->setNbrPlace($nbrePlacesDispo - $nbrePlacesChoisi);
            // dd('user' . $user);
            // dd('event' . $event);
            // dd('reservation' . $reservation);
            $reservationRepository->save($reservation, true);

            $this->addFlash('notice','Evennement réservé avec success!');

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'event' => $event
        ]);
    }
}
