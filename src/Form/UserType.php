<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 18-01-18
 * Time: 16:11
 */

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'firstName',
                )
            ))
            ->add('lastName', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'lastName',
                )
            ))
            ->add('userName', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'userName',
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Email',
                )
            ))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => false, 'attr' => array('placeholder' => 'Password',)),
                'second_options' => array('label' => false, 'attr' => array('placeholder' => 'Repeat Password',)),
            ))
            ->add('code',TextType::class,array(
                'label'=> false,
                'attr'=>array(
                    'placeholder'=> 'secret Code'
                )
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Users::class,
        ));
    }
}