<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Enum\Genre;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $author = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $publishedAt = null;

    #[ORM\Column(type: 'string', length: 50, enumType: Genre::class, nullable: true)]
    private ?Genre $genre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $summary = null;

    // Getters & Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): static
    {
        $this->author = $author;
        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(?\DateTimeInterface $publishedAt): static
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }

    public function getGenre(): ?Genre
    {
    return $this->genre;
    }

    public function setGenre(?Genre $genre): static
    {
    $this->genre = $genre;
    return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): static
    {
        $this->summary = $summary;
        return $this;
    }
}
