<?php

namespace App\Controller;

use App\Models\Triangle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController
{
    /**
     * Triangle calculations response
     * @param float $a triangle 1st side length
     * @param float $b triangle 2nd side length
     * @param float $c triangle 3rd side length
     * @return Response
     */
    #[Route('/triangle/{a}/{b}/{c}', methods: ['GET'])]
    public function index(float $a, float $b, float $c): Response
    {
        // handle triangle lengths exception
        try {
            $triangle = new Triangle($a, $b, $c);
        } catch (\Exception $e) {
            return new Response($e->getMessage());
        }

        $res = [
            "type" => 'triangle',

            "a" => $a,
            "b" => $b,
            "c" => $c,

            "surface" => $triangle->surface(),

            "circumference" => $triangle->circumference(),
        ];

        return new Response(json_encode($res));
    }
}
