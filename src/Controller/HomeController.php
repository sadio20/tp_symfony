<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {

        $nom ='camara';
        return $this->render('home/index.html.twig', [
            'mavar' => $nom,
        ]);
    }
}
