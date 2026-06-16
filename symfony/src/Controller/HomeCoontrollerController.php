<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeCoontrollerController extends AbstractController
{
    #[Route('/home/coontroller', name: 'app_home_coontroller')]
    public function index(): Response
    {
        return $this->render('home_coontroller/index.html.twig', [
            'controller_name' => 'HomeCoontrollerController',
        ]);
    }
}
