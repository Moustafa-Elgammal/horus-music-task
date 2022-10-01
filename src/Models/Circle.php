<?php

namespace App\Models;

use App\Models\Interfaces\GeometryInterface;

class Circle implements GeometryInterface
{
    const PI = 3.14; // in some approaches, it equals 22/7

    public function __construct(protected float $radius){}

    /**
     * Circle area
     * @return float
     */
    public function surface(): float
    {
        return round($this->radius * $this->radius * self::PI, 2);
    }

    /**
     * Circle diameter
     * @return float
     */
    public function diameter(): float
    {
        return round(2 * $this->radius, 2);
    }

    /**
     * Circle circumference
     * @return float
     */
    public function circumference(): float
    {
        return round(2 * $this->radius * self::PI, 2);
    }
}
