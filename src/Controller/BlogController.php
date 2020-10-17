<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    public function list($page)
    {
        return $this->render('blog/blog_list.html.twig', []);
    }

    public function show($slug)
    {
    }
}