<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController{
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }

    #[Route('blog/article/lister', name: 'blog_article')]
    public function Lister(): Response
    {
        return $this->render('blog/list.html.twig');
    }

    #[Route('blog/article/{id<\d+>}', name: 'blog_article_show', defaults: ['id'=>1])]
    public function show($id): Response
    {
        return $this->render('blog/show.html.twig', [
            'id' => $id
        ]);
    }
    #[Route('blog/article/details/{id<[0-9]{1,3}>}/{name<[a-zA-Z]+>}', name: 'blog_article_details-show', defaults: ['id'=>1],priority: 1)]
    public function details($id,$name): Response
    {
        return $this->render('blog/details.html.twig', [
            'id' => $id,
            'name' => $name
        ]);
    }
    #[Route('/blog/article/test', name: 'blog-article-test')]
    public function test(): Response
    {
        #$url=$this->generateUrl('blog');
        #return $this->redirect($url);
        return $this->redirectToRoute('blog_article_details-show', ['id' => 1, 'name' => 'kamel']);
    }


}
