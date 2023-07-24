<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    #[Route('/message', name: 'app_message')]
    public function index(): Response
    {
        $message = new Message();

        $form = $this->createForm(MessageType::class, $message);

        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
            'form' => $form,
        ]);
    }
}
