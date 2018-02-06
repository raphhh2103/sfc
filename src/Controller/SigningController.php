<?php

namespace App\Controller;

use App\Entity\JobsSfc;
use App\Entity\Results;
use App\Entity\Signing;
use App\Entity\UserJobs;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
}
