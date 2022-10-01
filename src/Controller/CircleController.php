<?php

namespace App\Controller;

use App\Models\Circle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CircleController
{
    /**
     * Circle  calculations response
     * @param float $radius circle radius
     * @return Response
     */
    #[Route('/circle/{radius}', methods: ['GET'])]
    public function index(float $radius): Response
    {
        $circle = new Circle($radius);

        $res = [
            "type" => 'circle',

            "radius" =>  $radius,

            "surface" =>  $circle->surface(),

            "circumference" =>  $circle->circumference(),
        ];

        return new Response(json_encode($res));
    }
}
