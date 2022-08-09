<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function index() 
    {
        return $this->render('index.html.twig');
    }

    public function about(){
        return $this->render('about.html.twig');
    }

    public function bar(Request $request, $city='all'){
        return $this->render('bar.html.twig', array("city"=>$city));
    }
}
