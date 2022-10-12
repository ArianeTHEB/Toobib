<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController

{
    /**
     * @Route ("/", name="main_accueil")
     */
    public function home(): Response
    {
        return $this->render('main/accueil.html.twig');
    }
}