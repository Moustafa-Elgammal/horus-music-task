<?php

namespace App\Service;

use App\Models\Interfaces\GeometryInterface;
use App\Service\Interfaces\AreasCalculatorInterface;
use App\Service\Interfaces\CircumferencesCalculatorInterface;
use App\Service\Interfaces\DiametersCalculatorInterface;

class GeometryCalculator implements AreasCalculatorInterface, DiametersCalculatorInterface, CircumferencesCalculatorInterface
{

    /**
     * get sum of areas
     * @param GeometryInterface $a
     * @param GeometryInterface $b
     * @return float
     */
    public function areasSum(GeometryInterface $a, GeometryInterface $b): float
    {
        return  $a->surface() + $b->surface();
    }

    /**
     * get sum of circumferences
     * @param GeometryInterface $a
     * @param GeometryInterface $b
     * @return float
     */
    public function circumferenceSum(GeometryInterface $a, GeometryInterface $b): float
    {
        return  $a->circumference() + $b->circumference();
    }

    /**
     * get sum of diameters
     * @param GeometryInterface $a
     * @param GeometryInterface $b
     * @return float
     */
    public function diametersSum(GeometryInterface $a, GeometryInterface $b): float
    {
        return  $a->diameter() + $b->diameter();
    }
}
