<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarDetailController extends AbstractController
{
    #[Route('/car-detail', name: 'car_detail')]
    public function index(): Response
    {
        return $this->render('car_detail/index.html.twig', [
            'controller_name' => 'CarDetailController',
        ]);
    }
}