<?php

namespace App\Models\Interfaces;

interface GeometryInterface
{
    /**
     * Get geometry area
     * @return float
     */
    public function surface(): float;

    /**
     * Get geometry diameter
     * @return float
     */
    public function diameter(): float;

    /**
     * Get geometry circumference
     * @return float
     */
    public function circumference(): float;
}
