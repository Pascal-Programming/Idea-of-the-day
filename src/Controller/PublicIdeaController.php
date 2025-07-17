<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

final class PublicIdeaController extends AbstractController
{
    #[Route('/', name: 'app_public_idea', requirements: ['_locale' => 'en|de'])]
    public function index(TranslatorInterface $translator): Response
    {
        return $this->render('public_idea/index.html.twig', [
            'controller_name' => 'PublicIdeaController',
        ]);
    }
}
