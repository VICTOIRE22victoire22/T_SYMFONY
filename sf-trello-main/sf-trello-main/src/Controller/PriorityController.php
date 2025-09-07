<?php

namespace App\Controller;

use App\Entity\Priority;
use App\Form\PriorityType;
use App\Repository\PriorityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/priority')]
final class PriorityController extends AbstractController
{
    #[Route(name: 'app_priority_index', methods: ['GET'])]
    public function index(PriorityRepository $priorityRepository): Response
    {
        return $this->render('priority/index.html.twig', [
            'priorities' => $priorityRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_priority_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $priority = new Priority();
        $form = $this->createForm(PriorityType::class, $priority);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($priority);
            $entityManager->flush();

            return $this->redirectToRoute('app_priority_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('priority/new.html.twig', [
            'priority' => $priority,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_priority_show', methods: ['GET'])]
    public function show(Priority $priority): Response
    {
        return $this->render('priority/show.html.twig', [
            'priority' => $priority,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_priority_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Priority $priority, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PriorityType::class, $priority);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_priority_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('priority/edit.html.twig', [
            'priority' => $priority,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_priority_delete', methods: ['POST'])]
    public function delete(Request $request, Priority $priority, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$priority->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($priority);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_priority_index', [], Response::HTTP_SEE_OTHER);
    }
}
