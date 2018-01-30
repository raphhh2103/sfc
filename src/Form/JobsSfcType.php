<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 30-01-18
 * Time: 13:55
 */

namespace App\Form;


use App\Entity\Jobs;
use App\Entity\JobsSfc;
use App\Entity\Sfcs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class JobsSfcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Jobs', EntityType::class, array(
                "class" => Jobs::class,
                "choice_label" => "id",
                "expanded" => false,
                "multiple" => false,
                "label" => "Job :  "
            ))
                ->add('Sfc', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "id",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ));


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => JobsSfc::class,
        ));
    }
}