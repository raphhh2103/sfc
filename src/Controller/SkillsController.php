<?php

namespace App\Controller;

use App\Entity\Skills;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SkillsController extends Controller
{
    /**
     * @Route("/skills", name="skills")
     */
    public function index(Request $request)
    {

        $skills = new Skills();
        $form = $this->createFormBuilder($skills)
            ->add('name',TextType::class)

            ->add('save',SubmitType::class ,array('label'=> 'create skills'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($skills);
            $em->flush();

        }


        // replace this line with your own code!
        return $this->render('Formateur/skills.html.twig',array('form'=>$form->createView()));
    }
}
