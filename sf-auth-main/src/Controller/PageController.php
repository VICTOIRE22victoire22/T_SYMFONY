<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class PageController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        // Je récupère la personne connectée
        $user = $this->getUser();
        dd($user);
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
