<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
     /**
     * @Route("/welcom", name="welcom")
     */
    public function newWelcom()
    {
        return $this->render('welcom.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
