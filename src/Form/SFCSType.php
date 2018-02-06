<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 25-01-18
 * Time: 15:08
 */

namespace App\Form;

use App\Entity\Sfcs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SFCSType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NameSfc', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'NameSfc',
                    'class' => '',
                )
            ))
            ->add('description', TextareaType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'description',
                    'class' => 'description',
                )
            ))
            ->add('indicatorObservable1', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Observable1',
                    'class' => '',
                )
            ))
            ->add('indicatorObservable2', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Observable2',
                    'class' => '',
                )
            ))
            ->add('indicatorObservable3', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Observable3',
                    'class' => '',
                )
            ))
            ->add('indicatorObservable4', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Observable4',
                    'class' => '',
                )
            ))
            ->add('indicatorGeneric1', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Generic1',
                    'class' => '',
                )
            ))
            ->add('indicatorGeneric2', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Generic2',
                    'class' => '',
                )
            ))
            ->add('indicatorGeneric3', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Generic3',
                    'class' => '',
                )
            ))
            ->add('indicatorGeneric4', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Generic4',
                    'class' => '',
                )
            ))


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Sfcs::class,
        ));
    }
}