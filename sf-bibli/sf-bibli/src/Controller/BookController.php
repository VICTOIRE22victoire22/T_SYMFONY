<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BookRepository;
use App\Form\BookType;
use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;

final class BookController extends AbstractController
{

    #[Route('/', name: 'app_book')]
    public function index(BookRepository $repo): Response
    {
        $books = $repo->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books
        ]);
    }

    #[Route('/livre/ajout', name: 'app_book_add', methods: ["GET", "POST"])]
    public function add(Request $req, EntityManagerInterface $em) : Response
    {
        $book = new Book;
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($book); // On veux ajouter le livre a la DB
            $em->flush(); // On confirme l'ajout

            return $this->redirectToRoute("app_book");
        }

        return $this->render('book/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/livre/{id}', name: "app_book_show", methods: ['GET'])]
    public function show(Book $book) : Response
    {
        return $this->render('book/show.html.twig', [
            'book' => $book
        ]);
    }

    #[Route('/livre/{id}/edit', name: "app_book_edit")]
    public function edit(Book $book, Request $req, EntityManagerInterface $em) : Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush(); // On confirme la modification

            return $this->redirectToRoute("app_book");
        }

        return $this->render('book/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route("/livre/supprimer/{id}", name: "app_book_delete")]
    public function delete(Book $book, EntityManagerInterface $em) : Response
    {
        $em->remove($book); // On veux supprimer le livre de la DB
        $em->flush(); // On confirme la suppression

        return $this->redirectToRoute("app_book");
    }
}
