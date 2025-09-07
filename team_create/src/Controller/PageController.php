<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CustomerRepository;
use App\Repository\TeamRepository;
use App\Entity\Team;
use App\Form\TeamType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

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

    #[Route('/clients', name: 'app_customers')]
    public function customers(CustomerRepository $repo) : Response
    {
        $customers = $repo->findAll();

        // Dump and die
        // dd($customers);

        return $this->render("page/customers.html.twig", [
            'customers' => $customers
        ]);
        // compact('customers')
        //https://www.php.net/manual/fr/function.compact.php
    }

    #[Route('/equipes', name: 'app_teams')]
    public function teams(TeamRepository $repo) : Response
    {
        $teams = $repo->findAll();

        return $this->render("page/teams.html.twig", [
            'title' => "Listing des teams",
            'teams' => $teams
        ]);
    }

    #[Route('/equipes/nouveau', name: "app_new_team")]
    public function createTeam(Request $request, EntityManagerInterface $em) : Response
    {
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute("app_teams");
        }

        return $this->render("page/create-team.html.twig", [
            'form' => $form->createView()
        ]);
    }
}
