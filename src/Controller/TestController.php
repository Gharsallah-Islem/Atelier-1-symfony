<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{ #[Route('/test/fr/{nom}',name:'test_fr')]
    function afficher($nom)
    {
        dd("bonjour $nom") ;
    }
    #[Route('/test/eng',name:'test_eng')]

    function show()
    {
        return new Response("Kamel");
    }
    #[Route('/test/wari/{nom}',name:'test_wari')]

    function wari($nom)
    {
        return $this->render('test/wari.html.twig',[

            'nom'=>$nom
        ]);
    }

}

