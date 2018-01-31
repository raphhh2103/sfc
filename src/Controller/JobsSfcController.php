<?php

namespace App\Controller;


use App\Entity\Jobs;
use App\Entity\JobsSfc;
use App\Entity\Sfcs;
use App\Form\JobsSfcType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JobsSfcController extends Controller
{
    /**
     * @Route("/jobs/sfc", name="jobs_sfc")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }


    /**
     * @Route("/jobsSfc", name="jobs_sfc")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $var = $this->getDoctrine()->getRepository(Jobs::class);
        $var2 = $this->getDoctrine()->getRepository(Sfcs::class);

        $jobSfc = new JobsSfc();
        $form = $this->createFormBuilder($jobSfc)
            ->add('Jobs', EntityType::class, array(
                "class" => Jobs::class,
                "choice_label" => "nameJobs",
                "expanded" => false,
                "multiple" => false,
                "label" => "Job :  "

            ))
            ->add('Sfc', EntityType::class, array(
                "class" => Sfcs::class,
                "choice_label" => "NameSfc",
                "expanded" => false,
                "multiple" => false,
                "label" => "Sfc :  "
            ))
            ->getForm();
        $info =  $request->request->get('form');
//        dump($request->request->get('form'));die;
//        if ( isset($info)) {
//            foreach ($info as $key => $value) {
//            dump($item);
//                for ($i = 0; $i <= count($info); $i++) {
//                    if ($i == $value) {
//                            dump('test');
//
//                        dump( $key,$value);
//                        if ($key == 'Jobs') {
//                                dump('test1');
//                           $jobs =  $this->getDoctrine()->getRepository(Jobs::class)
//                                ->find($value);
//                           dump($jobs->getId());
//                            $jobSfc->setJobs($jobs->getId());
//                           dump( $jobSfc->getJobs());
//                        }
//                        if ($key == 'Sfc'){
//                            dump('test2');
//                            $repo = $this->getDoctrine()->getRepository(Jobs::class)
//                                ->find($value);
//                            $jobSfc->setSfc($repo->getId());
//                           dump( $jobSfc->getSfc());
//                        }
//                      if($jobSfc->getJobs() && $jobSfc->getSfc() !== null){
//
//
//                      }
//                    }
//                }

//            }
//        }
//die();
         $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $em = $this->getDoctrine()->getManager();
                          $em->persist($jobSfc);
                          $em->flush();


            //var_dump($job->getId());die;

//            $em = $this->getDoctrine()->getManager();
//            $em->persist($jobSfc);
//



        }

        return $this->render(
            'Jobs_Sfcs.html.twig',
            array('form' => $form->createView())
        );
    }
}
