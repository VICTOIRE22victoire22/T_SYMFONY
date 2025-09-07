<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PageController extends AbstractController
{

    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
]);
    }

#[Route('/book', name: 'app_book_add')]
public function add(Request $request, EntityManagerInterface $em): Response
{
    $book = new Book();
    $form = $this->createForm(BookType::class, $book);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($book);
        $em->flush();

        $this->addFlash('success', 'Livre enregistré avec succès.');

        return $this->redirectToRoute('app_books');
    }

    return $this->render('page/book/add.html.twig', [
        'form' => $form->createView(),
    ]);
}

        #[Route('/books', name: 'app_books')]
    public function books(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll(); // Récupère tous les livres

    return $this->render('page/books.html.twig', [
        'title' => 'Liste des livres', // ✅ ici on passe "title"
        'books' => $books,             // autres variables éventuelles
]);
}

    #[Route('/book/{id}', name: 'app_book_delete', methods: ['POST'])]
    public function delete(Request $request, Book $book, EntityManagerInterface $em): RedirectResponse
    {
        if ($this->isCsrfTokenValid('delete' . $book->getId(), $request->request->get('_token'))) {
            $em->remove($book);
            $em->flush();
            $this->addFlash('success', 'Livre supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('app_books');
    }

}

