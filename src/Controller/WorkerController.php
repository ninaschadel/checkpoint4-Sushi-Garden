<?php

namespace App\Controller;

use App\Repository\WorkerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkerController extends AbstractController
{
    #[Route('/equipe', name: 'app_worker')]
    public function index(WorkerRepository $workerRepository): Response
    {
        $workers = $workerRepository->findAll();

        return $this->render('worker/index.html.twig', [
            'controller_name' => 'WorkerController',
            'workers' => $workers,
        ]);
    }
}
