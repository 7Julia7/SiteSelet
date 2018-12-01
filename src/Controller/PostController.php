<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="post")
     */
    public function indexAction()
    {
        return $this->render('post/index.html.twig', [
            'hello' => 'Привет',
            'whatthere' => 'Здесь ты сможешь найти т.д'
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('post/about.html.twig', [
            'about' => 'бла бла бла'
        ]);
    }
    /**
     * @Route("/posts", name="posts")
     */
    public function postsAction()
    {
        return $this->render('post/posts.html.twig', [
            'posts' => 'gfhruyfg'
        ]);
    }
}
