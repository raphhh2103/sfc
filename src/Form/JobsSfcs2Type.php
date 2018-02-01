<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 01-02-18
 * Time: 11:31
 */

namespace App\Form;


use App\Entity\Jobs;
use App\Entity\JobsSfc;
use App\Entity\Sfcs;
use App\Entity\Skills;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class JobsSfcs2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('indicatorObservable1', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorObservable1",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorObservable2', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorObservable2",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorObservable3', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorObservable3",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorObservable4', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorObservable4",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorGeneric1', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorGeneric1",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorGeneric2', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorGeneric2",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorGeneric3', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorGeneric3",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('indicatorGeneric4', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "indicatorGeneric4",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->add('save',SubmitType::class ,array('label'=> 'update !'));




    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => JobsSfc::class,
            'Sfcs' => null,
        ));
    }
}