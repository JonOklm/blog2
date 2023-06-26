<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'veuillez remplir ce champ ! '
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'veuillez entrer minimum 10 caractères',
                        'max' => 100,
                        'maxMessage' => 'veuillez entrer 100 caractères maximum'
                    ])
                ]
            ])
            ->add('contenu', CKEditorType::class)
            ->add('imageForm', FileType::class, [
                'mapped' => false,
                'required' => false
            ])
            ->add('auteur', EntityType::class, [
                'placeholder' => 'choisissez un auteur',
                'class' => Auteur::class,
                'choice_label' => 'fullName'
            ])
            ->add('categories',  EntityType::class, [
                'placeholder' => 'selectionnez une ou plusieurs catégories',
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
