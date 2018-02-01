<?php

namespace App\Controller;


use App\Entity\Jobs;
use App\Entity\JobsSfc;
use App\Entity\Sfcs;
use App\Form\JobsSfcType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Twig\Tests\Extension\RoutingExtensionTest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JobsSfcController extends Controller
{

    private $key = 'yolo';


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


        $jobSfc = new JobsSfc();
        $jobSfc->setIndicatorGeneric1('IG1');
        $jobSfc->setIndicatorGeneric2('IG2');
        $jobSfc->setIndicatorGeneric3('IG3');
        $jobSfc->setIndicatorGeneric4('IG4');
        $jobSfc->setIndicatorObservable1('IO1');
        $jobSfc->setIndicatorObservable2('IO2');
        $jobSfc->setIndicatorObservable3('IO3');
        $jobSfc->setIndicatorObservable4('IO4');
        $jobSfc->setRequiredLevel('0');


        $form = $this->createForm(JobsSfcType::class, $jobSfc);

//        $info =  $request->request->get('form');
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
            $id = $jobSfc->getId();
            $code = md5($jobSfc->getId(),$this->key);

            return $this->redirectToRoute('jobs_sfc2',array( 'id'=>$id));




        }

        return $this->render(
            'Jobs_Sfcs.html.twig',
            array('form' => $form->createView())
        );
    }


    /**
     * @Route("/jobsSfc2/{id}", name="jobs_sfc2")
     * @param id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateAction(Request $request, JobsSfc $j)
    {

        dump($j->getId());


//        $url = $request->getPathInfo();
//        dump($url);
//        $split = str_split($url,10);
//        dump($split);/*die();*/
//        $code = $split[1].$split[2].$split[3].$split[4].$split[5];
//        dump($code);
//        for ($i = 0; $i<9999999;$i++) {
//            if ($code === md5($i . $this->key)) {
//                dump($i);
                $repo = $this->getDoctrine()->getRepository('App\Entity\JobsSfc');
                $j = $repo->find($j->getId());
                $repo2 = $this->getDoctrine()->getRepository('App\Entity\Sfcs');
                $s = $repo2->find($j->getSfc());
//            }
        dump($j);
//        }
        $form = $this->createFormBuilder($j)
            ->add('indicatorObservable1', $s, array(
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
            ->add('save',SubmitType::class ,array('label'=> 'update !'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();


            $em->persist($j);
            $em->flush();

            return $this->render('Jobs_Sfcs2.html.twig',array('form'=>$form->createView()));
        }


        return $this->render('Jobs_Sfcs2.html.twig',array('form'=>$form->createView()));
//    return $this->render('Jobs_sfcs2.html.twig');
    }
}
