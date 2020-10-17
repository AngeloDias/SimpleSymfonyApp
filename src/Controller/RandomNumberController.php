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
            $this->addFlash('number', "Your number was: $number");
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $this->render('random/number.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'number' => $number,
        ]);
    }

}
