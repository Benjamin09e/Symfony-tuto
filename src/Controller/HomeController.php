<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(){

        /*$number= 123;
        return new Response("Benjamin: $number");
        */
        $tabs =[1,2,3,4,5];
        $bool = true;
        return $this->render('index.html.twig',[
            "let" => "Je suis ici",
            "tabs" => $tabs,
            "bool"=> $bool
        ]);
    }

    /**
     * @Route("/params/{name}", name="name", defaults={"name": "EKIA"},
     *  methods={"GET"})
     */
    public function params(string $name){

        return new Response("Benjamin: $name");

    }

}