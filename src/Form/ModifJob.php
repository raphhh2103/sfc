<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 29-01-18
 * Time: 10:21
 */

namespace App\Form;

use App\Entity\Jobs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifJob extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameJobs', TextType::class)
            ->add('description', TextType::class)



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Jobs::class,
        ));
    }
}