<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 22-01-18
 * Time: 15:27
 */

namespace App\Form;


use App\Entity\Jobs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class JobsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameJobs', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'nameJobs',
                    'class' => 'input1',
                )
            ))
            ->add('description', TextareaType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'description',
                    'class' => 'input2',
                )
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Jobs::class,
        ));
    }
}