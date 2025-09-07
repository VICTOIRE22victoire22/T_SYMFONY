<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'title' => 'Accueil',
        ]);
    }

    #[Route('/a-propos', name: 'app_about')]
    public function about() : Response
    {
        return $this->render("page/about.html.twig", [
            'title' => "A propos"
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact() : Response
    {
        return $this->render("page/contact.html.twig", [
            'title' => "Contactez-nous"
        ]);
    }
}
