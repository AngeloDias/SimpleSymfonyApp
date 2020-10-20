<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HeadTextInBlogController extends AbstractController
{
    public function showHead() {
        return $this->render('blog/_blog_head_text.html.twig');
    }
}