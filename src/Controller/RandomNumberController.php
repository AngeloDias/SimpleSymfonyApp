<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RandomNumberController extends AbstractController
{
    public function number()
    {
        try {
            $number = random_int(0, 100);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $this->render('random/number.html.twig', [
            'number' => $number,
        ]);
    }

}
