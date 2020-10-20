<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TellMeAboutYou extends AbstractController
{
    public function setView()
    {
        return $this->render('blog/tell_me_about_you.html.twig');
    }
}