<?php

namespace App\Service\Interfaces;

use App\Models\Interfaces\GeometryInterface;

interface CircumferencesCalculatorInterface
{

    /**
     * total sum circumferences of two objects
     * @param GeometryInterface $a
     * @param GeometryInterface $b
     * @return float
     */
    public function circumferenceSum(GeometryInterface $a, GeometryInterface $b): float;
}
