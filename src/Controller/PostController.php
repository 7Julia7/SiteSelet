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
        $a=2+2;
        $b=2+2*2;
        $c=$a*$b;
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'hello' => 'Hello world',
            'calculated' => $c,
        ]);
    }
}

{
    /**
     * @Route("/", name="post")
     */
    public function aboutAction()
    {

        $f="И тут будет описание";
    return $this->render('post/about.html.twig', [
        'controller_name' => 'PostController',
        'description' => '$f',
    ]);
}
}