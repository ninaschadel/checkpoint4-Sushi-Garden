<?php

namespace App\Controller;

use App\Entity\Worker;
use App\Form\WorkerType;
use App\Repository\WorkerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/equipe')]
class AdminWorkerController extends AbstractController
{
    #[Route('/', name: 'app_admin_worker_index', methods: ['GET'])]
    public function index(WorkerRepository $workerRepository): Response
    {
        return $this->render('/admin/admin_worker/index.html.twig', [
            'workers' => $workerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_worker_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $worker = new Worker();
        $form = $this->createForm(WorkerType::class, $worker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($worker);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_worker_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/admin/admin_worker/new.html.twig', [
            'worker' => $worker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_worker_show', methods: ['GET'])]
    public function show(Worker $worker): Response
    {
        return $this->render('/admin/admin_worker/show.html.twig', [
            'worker' => $worker,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_worker_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Worker $worker, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(WorkerType::class, $worker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_worker_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/admin/admin_worker/edit.html.twig', [
            'worker' => $worker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_worker_delete', methods: ['POST'])]
    public function delete(Request $request, Worker $worker, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $worker->getId(), $request->request->get('_token'))) {
            $entityManager->remove($worker);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_worker_index', [], Response::HTTP_SEE_OTHER);
    }
}
