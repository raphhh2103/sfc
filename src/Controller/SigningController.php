<?php

namespace App\Controller;

use App\Entity\JobsSfc;
use App\Entity\Results;
use App\Entity\Signing;
use App\Entity\UserJobs;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use function Sodium\add;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SigningController extends Controller
{
    /**
     * @Route("/result/signing", name="result_signing")
     *
     */
    public function index()
    {
        $repo1 = $this->getDoctrine()->getRepository('App:UserJobs')->findAll();
        $userJobs = $repo1;
        $repo = $this->getDoctrine()->getRepository('App:JobsSfc')->findAll();
        $jobsfc = $repo;
        foreach ($jobsfc as $key => $value) {
//            dump($value);
            foreach ($userJobs as $k => $v) {
                    dump('0');
                if ($v->getFormateur() == $this->getUser()) {
                    dump('1');

                    $j = $value->getUser();
                        $u = $value;
//                dump($value);

                    if ($j->getId() === $this->getUser()->getId()) {
                        dump('2');
                        $signing = new Signing();
                        $signing->setUserJobs($v);
                        $signing->setDate(new \DateTime());
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($signing);
                        $em->flush();
                        $result = new Results();
                        dump($u);
                        $result->setJobSfc($u);
                        $result->setValue(4);
                        $result->setSigning($signing);
                        $ems = $this->getDoctrine()->getManager();
                        $ems->persist($result);
                        $ems->flush();
                        dump($result);
                        $id = $result->getId();
                        return $this->redirectToRoute('result_form_graphic',array('id'=>$id));
                    }
                }
            }
        }
//        dump($jobsfc);
//        dump($userJobs);
//        dump($jobsfc->getUserId()); die();


        // replace this line with your own code!
        return $this->render('result/singning.html.twig', ['path' => str_replace($this->getParameter('kernel.project_dir') . '/', '', __FILE__)]);
    }

    /**
     * @Route("result/update/{id}",name="result_form_graphic")
     * @param  {id}
     * @param Request $request
     * @return Response
     */
    public function updateResultAction(Request $request,Results $result)
    {

        $form = $this->createFormBuilder($result)
            ->add('value',IntegerType::class)
            ->add('save',SubmitType::class,array('label'=>'save'))
            ->getForm();
        $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($result);
                $em->flush();
                $id = $result->getId();
                $this->redirectToRoute('result_graphic',array('id'=>$id));
            }





        return $this->render('result/formGraphic.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("result/graphic/{id}", name = "result_graphic")
     * @param {id}
     * @return Response
     */
    public function ResultForGraphicalAction(Results $result)
    {
        $currentJobSfc = null;
        $currentJobSfc1 = null;
        $currentJobSfc2 = null;
        $currentJobSfc3 = null;
        $currentJobSfc4 = null;
        $currentJobSfc5 = null;
        $currentJobSfc6 = null;
        $value = $result->getValue();
        $user = $this->getUser();
        $compt = 0;
        $jobSfc = $this->getDoctrine()->getRepository('App:JobsSfc')->findAll();
//        dump($jobSfc);
        foreach ($jobSfc as $key=>$values){
//            dump($values);
            if ($values->getUser() === $user ){
                if ($key === 0)
                $currentJobSfc =  $values ;
//                dump($currentJobSfc);
                dump('0');
                if ($key === 1){
                    $currentJobSfc1 = $values;
//                    dump($currentJobSfc1);
                    dump('1');
                }
                if ($key === 2){
                    $currentJobSfc2 = $values;
                    dump('2');
                }
                if ($key === 3){
                    $currentJobSfc3 = $values;
                    dump('3');
                }
                if ($key === 4){
                    $currentJobSfc4 = $values;
                    dump('4');
                }
                if ($key === 5){
                    $currentJobSfc5 = $values;
                    dump('5');
                }
                if ($key === 6){
                    $currentJobSfc6 = $values;
                    dump('6');
                }



            }
        }









        return $this->render('result/graphic.html.twig',array(
            'value'=>$value,
            'sfc1'=>$currentJobSfc->getSfc()->getNameSfc(),
            'sfc2'=>$currentJobSfc1->getSfc()->getNameSfc(),
//            'sfc3'=>$currentJobSfc2->getSfc()->getNameSfc(),
//            'sfc4'=>$currentJobSfc3->getSfc()->getNameSfc(),
//            'sfc5'=>$currentJobSfc4->getSfc()->getNameSfc(),
//            'sfc6'=>$currentJobSfc5->getSfc()->getNameSfc(),
            'sfc1ig1'=>$currentJobSfc->getIndicatorGeneric1(),
            'sfc1ig2'=>$currentJobSfc->getIndicatorGeneric2(),
            'sfc1ig3'=>$currentJobSfc->getIndicatorGeneric3(),
            'sfc1ig4'=>$currentJobSfc->getIndicatorGeneric4(),
            'sfc2ig1'=>$currentJobSfc1->getIndicatorGeneric1(),
            'sfc2ig2'=>$currentJobSfc1->getIndicatorGeneric2(),
            'sfc2ig3'=>$currentJobSfc1->getIndicatorGeneric3(),
            'sfc2ig4'=>$currentJobSfc1->getIndicatorGeneric4(),
//            'sfc3ig1'=>$currentJobSfc2->getIndicatorGeneric1(),
//            'sfc3ig2'=>$currentJobSfc2->getIndicatorGeneric2(),
//            'sfc3ig3'=>$currentJobSfc2->getIndicatorGeneric3(),
//            'sfc3ig4'=>$currentJobSfc2->getIndicatorGeneric4(),
//            'sfc4ig1'=>$currentJobSfc3->getIndicatorGeneric1(),
//            'sfc4ig2'=>$currentJobSfc3->getIndicatorGeneric2(),
//            'sfc4ig3'=>$currentJobSfc3->getIndicatorGeneric3(),
//            'sfc4ig4'=>$currentJobSfc3->getIndicatorGeneric4(),
//            'sfc5ig1'=>$currentJobSfc4->getIndicatorGeneric1(),
//            'sfc5ig2'=>$currentJobSfc4->getIndicatorGeneric2(),
//            'sfc5ig3'=>$currentJobSfc4->getIndicatorGeneric3(),
//            'sfc5ig4'=>$currentJobSfc4->getIndicatorGeneric4(),
//            'sfc6ig1'=>$currentJobSfc5->getIndicatorGeneric1(),
//            'sfc6ig2'=>$currentJobSfc2->getIndicatorGeneric2(),
//            'sfc6ig3'=>$currentJobSfc3->getIndicatorGeneric3(),
//            'sfc6ig4'=>$currentJobSfc4->getIndicatorGeneric4(),
            'requiredLevel'=>$currentJobSfc->getRequiredLevel(),
            'requiredlevel1'=>$currentJobSfc1->getRequiredLevel(),
//            'requiredlevel2'=>$currentJobSfc2->getRequiredLevel(),
//            'requiredlevel3'=>$currentJobSfc3->getRequiredLevel(),
//            'requiredlevel4'=>$currentJobSfc4->getRequiredLevel(),
            'jobs'=>$currentJobSfc->getJobs()->getNameJobs(),


        ));
    }










}
