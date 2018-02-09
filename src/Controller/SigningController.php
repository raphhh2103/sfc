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
        $id = 0;
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
                        return $this->redirectToRoute('result_form_graphic', array('id' => $id));
                    } else {
                        return $this->redirectToRoute('home');
                    }
                }
            }
        }
//        dump($jobsfc);
//        dump($userJobs);
//        dump($jobsfc->getUserId()); die();


        // replace this line with your own code!
        return $this->render('result/singning.html.twig');
    }

    /**
     * @Route("result/update/{id}",name="result_form_graphic")
     * @param  {id}
     * @param Request $request
     * @return Response
     */
    public function updateResultAction(Request $request, Results $result)
    {
        $res = $this->getDoctrine()->getRepository('App:Results')->findAll();
        dump($res);

                $form = $this->createFormBuilder($result)
                    ->add('value', IntegerType::class)
                    ->add('save', SubmitType::class, array('label' => 'save'))
                    ->getForm();
                $form->handleRequest($request);


                if ($form->isSubmitted() && $form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($result);
                    $em->flush();
                    $id = $result->getId();
                    return $this->redirectToRoute('result_graphic', array('id' => $id));
                }


        return $this->render('result/formGraphic.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("result/graphic/{id}", name = "result_graphic")
     * @param {id}
     * @return Response
     */
    public function ResultForGraphicalAction(Results $result)
    {
        $currentJobSfc = null;
        $val = [];
        $value = $result->getValue();
        $user = $this->getUser();
        $compt = 0;
        $jobSfc = $this->getDoctrine()->getRepository('App:JobsSfc')->findAll();
        $results = $this->getDoctrine()->getRepository('App:Results')->findAll();

//        dump($jobSfc);
        foreach ($jobSfc as $key => $values) {
//            dump($values);
            if ($values->getUser() === $user) {
                $currentJobSfc[$key] = $values;

            }
            foreach ($results as $k => $v) {
                if ($v->getJobSfc() === $currentJobSfc[$key]) {
                    $val[$key] = $v;
                }
            }
            dump($currentJobSfc);
//                return $this->render('result/graphic.html.twig', array(
//                    'value' => $value,
//                    'sfc'=>$currentJobSfc,
//                    'jobs'=>$currentJobSfc[0]->getJobs(),
//                ));
//            }
        }


        return $this->render('result/graphic.html.twig', array(
            'result' => $results,
            'val' => $val,
            'sfc' => $currentJobSfc,
        ));
    }


}
