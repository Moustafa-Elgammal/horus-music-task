<?php

namespace App\Service\Interfaces;

use App\Models\Interfaces\GeometryInterface;

interface AreasCalculatorInterface
{
    /**
     *  total sum area of two objects
     * @param GeometryInterface $a
     * @param GeometryInterface $b
     * @return float
     */
    public function areasSum(GeometryInterface $a, GeometryInterface $b): float;
}
