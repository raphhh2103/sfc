<?php

namespace App\Controller;


use App\Entity\Jobs;
use App\Entity\JobsSfc;
use App\Entity\Sfcs;
use App\Form\JobsSfcs2Type;
use App\Form\JobsSfcType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Twig\Tests\Extension\RoutingExtensionTest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
        $jobSfc->setUser($this->getUser());
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
                $id =$s->getId();

        $j->setIndicatorGeneric1($s->getIndicatorGeneric1());
        $j->setIndicatorGeneric2($s->getIndicatorGeneric2());
        $j->setIndicatorGeneric3($s->getIndicatorGeneric3());
        $j->setIndicatorGeneric4($s->getIndicatorGeneric4());


        $j->setIndicatorObservable1($s->getIndicatorObservable1());
        $j->setIndicatorObservable2($s->getIndicatorObservable2());
        $j->setIndicatorObservable3($s->getIndicatorObservable3());
        $j->setIndicatorObservable4($s->getIndicatorObservable4());


        $form = $this->createFormBuilder($j)
            ->add('indicatorObservable1',TextType::class)
            ->add('indicatorObservable2',TextType::class)
            ->add('indicatorObservable3',TextType::class)
            ->add('indicatorObservable4',TextType::class)
            ->add('indicatorGeneric1',TextType::class)
            ->add('indicatorGeneric2',TextType::class)
            ->add('indicatorGeneric3',TextType::class)
            ->add('indicatorGeneric4',TextType::class)
            ->add('requiredLevel',IntegerType::class)





            ->add('save',SubmitType::class ,array('label'=> 'generate link'))
            ->getForm();


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($j);
            $em->flush();
            $id = $j->getId();


        }
//            $id = $_POST['id'] ;
//            dump($user->getId());

//        $var = $this->get("doctrine")->findIndicatorById($s);
////            }
//        dump($var);
//        dump($j);
//        }
//        $form = $this->createForm(JobsSfcs2Type::class, $j);
//        dump($this->getUser());
//
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $em = $this->getDoctrine()->getManager();
//
//
//            $em->persist($j);
//            $em->flush();
//
//            return $this->render('Jobs_Sfcs2.html.twig',array('form'=>$form->createView()));
//        }


        return $this->render('Jobs_Sfcs2.html.twig',array('IG1' => $j->getIndicatorGeneric1(),
            'IG2' => $j->getIndicatorGeneric2(),
            'IG3' => $j->getIndicatorGeneric3(),
            'IG4' => $j->getIndicatorGeneric4(),
            'IO1' => $j->getIndicatorObservable1(),
            'IO2' => $j->getIndicatorObservable2(),
            'IO3' => $j->getIndicatorObservable3(),
            'IO4' => $j->getIndicatorObservable4(),
            'form'=>$form->createView(),


            ));
//    return $this->render('Jobs_sfcs2.html.twig');
    }
}
