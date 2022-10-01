<?php

namespace App\Service\Interfaces;

use App\Models\Interfaces\GeometryInterface;

interface DiametersCalculatorInterface
{
    /**
     * total sum diameters of two objects
     * @param GeometryInterface $a
     * @param GeometryInterface $b
     * @return float
     */
    public function diametersSum(GeometryInterface $a, GeometryInterface $b): float;
}
