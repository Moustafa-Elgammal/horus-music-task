<?php

namespace App\Controller;

use App\Models\Circle;
use App\Models\Triangle;
use App\Service\GeometryCalculator;
use Michelf\Markdown;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        try {
            $html = Markdown::defaultTransform(file_get_contents('../readme.md'));
        } catch (\Exception $e) {
            $html = "Hello, I can not load the readme file";
        } finally {
            return new Response($html);
        }
    }

    /**
     * Test areas calculator
     * @throws \Exception
     */
    #[Route('/test')]
    public function test(GeometryCalculator $calculator): Response
    {

        // implement method for sum of areas for two given objects
        $areas = $calculator->areasSum(
            new Circle(2),
            new Triangle(3, 4, 5)
        );

        // implement method for sum of diameters for two given objects
        $diameters = $calculator->diametersSum(
            new Circle(2),
            new Triangle(3, 4, 5)
        );

        //implement method for sum of circumferences for two given objects
        $circumferences = $calculator->circumferenceSum(
            new Circle(2),
            new Triangle(3, 4, 5)
        );

        return new Response("Areas sum is $areas, diameters sum is $diameters, circumferences sum is $circumferences.");
    }
}
