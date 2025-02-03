<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarListController extends AbstractController
{
    #[Route('/', name: 'car_list')]
    public function index(): Response
    {
        return $this->render('car_list/index.html.twig', [
            'controller_name' => 'CarListController',
        ]);
    }
}