<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddTaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('task', TextType::class, options: [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Task name'
            ])
            ->add('category', TextType::class, options: [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Category'
            ])
            ->add('listname', TextType::class, options: [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'List name'
            ])
            ->add('description', TextareaType::class, options: [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Description'
            ])
            ->add('deadline', DateType::class, options: [
                'attr' => [
                    'class' => '',
                    'value' => ''
                ],
                'label' => 'Deadline'
            ])
            ->add('save', SubmitType::class, options: [
                'attr' => [
                    'class' => 'btn btn-success btn-sm mt-3'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}