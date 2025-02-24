<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class calculController extends AbstractController
{
    #[Route('/calcul/somme/{a}/{b}', name: 'calcul_somme')]
    public function somme(int $a, int $b): Response
    {
        $somme = $a + $b;
        return $this->render('blog/somme.html.twig', [
            'a' => $a,
            'b' => $b,
            'somme' => $somme
        ]);
    }
    #[Route('/calcul/soustraction/{a}/{b}', name: 'calcul_soustraction')]
    public function soustraction(int $a, int $b): Response
    {
        $s = $a - $b;
        return $this->render('blog/soustraction.html.twig', [
            'a' => $a,
            'b' => $b,
            's' => $s
        ]);
    }
    #[Route('/calcul', name: 'calcul')]
    public function test(): Response
    {

        return $this->render('blog/acceuil.html.twig');
    }


}