<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ControleJsonController extends AbstractController
{
    #[Route('/controle/json/userlist', name: 'app_controle_json')]
    public function user(UsersRepository $UsersRepository, NormalizerInterface $normlizer): Response
    {
        $user=$UsersRepository->findAll();
        $userNor=$normlizer->normalize($user,'json');
        $json=json_encode($userNor);
        return new Response($json);
    }
}
