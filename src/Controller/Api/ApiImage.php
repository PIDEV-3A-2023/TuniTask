<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiImage extends AbstractController
{
    

/*
public function uploadImage(Request $request): Response
{
  
    $data = json_decode($request->getContent(), true);
    $imageData = $data['image'];

    // Decode the base64-encoded image data
   $decodedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));

    // Generate a unique filename for the image
    $filename = uniqid() . '.png';

    // Save the image file to the specified directory
    $filepath = 'C:/xampp/htdocs/img/' . $filename;

    file_put_contents($filepath,$decodedImage);

    // Return a response indicating that the image was uploaded successfully
    return new Response('Image uploaded successfully', Response::HTTP_OK);
}
*/
}
