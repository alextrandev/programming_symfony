<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController extends AbstractController {

    #[Route('/temperature')]
    public function temperature(Request $request) {
        $temp = $request->query->get('temperature');

        if (!is_numeric($temp)) {
            return new Response("Error: Temperature must be a number", 400);
        }

        $fahrenheit = round(($temp * 9 / 5) + 32, 2);
        $celcius = round(($temp - 32) / 1.8, 2);

        $message = "The temperature in Fahrenheit : $fahrenheit <br>";
        $message .= "The temperature in Celcius : $celcius";

        return new Response($message);
    }
}
