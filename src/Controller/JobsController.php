<?php

namespace App\Controller;

use App\Entity\Jobs;
use App\Form\JobsType;
use App\Form\ModifJob;
use App\Repository\JobsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class JobsController extends Controller
{

    /**
     * @Route("/vueJobs", name="vueJobs")
     */
    public function detailsAction(){
        $repo = $this->getDoctrine()->getRepository(Jobs::class)
        ->findAll();

//        return new Response('Check out this great product: '.$repo->getnameJobs());

        return $this->render(
            'metier.html.twig', ['Jobs' => $repo]

        );
    }

    /**
     * @Route("/jobs", name="jobs")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {

        $job = new Jobs();
        $form = $this->createForm(JobsType::class, $job);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            //var_dump($job->getId());die;

            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();



        }

        return $this->render(
            'Admin/createJobs.html.twig',
            array('form' => $form->createView())
        );
    }


    public function updateAction(Jobs $jobs, Request $request)
    {
        $form = $this->createForm(ModifJob::class, $jobs);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            //var_dump($job->getId());die;
            // On enregistre l'utilisateur dans la base
            $em = $this->getDoctrine()->getManager();

            $em->persist($jobs);
            $em->flush();


//            return $this->redirectToRoute('metier', [
//                'name' => $job,
//            ]);
        }

        return $this->render(
            'Admin/modifJobs.html.twig',
            array('form' => $form->createView())
        );

    }
}
