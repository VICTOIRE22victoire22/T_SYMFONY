<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Enum\Genre;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => false,
                'label' => 'Titre',
            ])
            ->add('author', TextType::class, [
                'required' => false,
                'label' => 'Auteur',
            ])
            ->add('publishedAt', DateType::class, [
                'required' => false,
                'label' => 'Date de publication',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('genre', ChoiceType::class, [
                'choices' => Genre::cases(),
                'choice_label' => fn(Genre $genre) => $genre->label(),
                'choice_value' => fn(?Genre $genre) => $genre?->value,
                'required' => false,
                'placeholder' => 'Choisissez un genre',
                'label' => 'Genre',
            ])
            ->add('summary', TextareaType::class, [
                'required' => false,
                'label' => 'Résumé',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
