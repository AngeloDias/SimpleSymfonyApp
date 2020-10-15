<?php

namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomNumberController
{
    /**
     * @Route("/random/number")
     */
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

}
