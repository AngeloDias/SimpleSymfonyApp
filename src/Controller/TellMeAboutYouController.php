<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TellMeAboutYouController extends AbstractController
{
    public function setView()
    {
        return $this->render('blog/tell_me_about_you.html.twig');
    }
}