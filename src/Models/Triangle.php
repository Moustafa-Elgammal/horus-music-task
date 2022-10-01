<?php

namespace App\Models;

use App\Models\Interfaces\GeometryInterface;

class Triangle implements GeometryInterface
{
    protected float $halfPerimeter;

    /**
     * @throws \Exception check the validation of sides lengths
     */
    public function __construct(
        protected float $a,
        protected float $b,
        protected float $c,
    )
    {
        $this->halfPerimeter = ($this->a + $this->b + $this->c) / 2;

        // handle invalid lengths
        if ($this->halfPerimeter < $this->a || $this->halfPerimeter < $this->b || $this->halfPerimeter < $this->c)
            throw new \Exception("Invalid triangle sides length");
    }

    /**
     * Triangle area
     * @return float
     */
    public function surface(): float
    {
        return round(sqrt($this->halfPerimeter * ($this->halfPerimeter - $this->a) * ($this->halfPerimeter - $this->b) * ($this->halfPerimeter - $this->c)), 2);
    }

    /**
     * Triangle diameter
     * @return float
     */
    public function diameter(): float
    {
        return round(2 *($this->a * $this->b * $this->c) / (4 * $this->surface()), 2);
    }

    /**
     * Triangle circumference
     * @return float
     */
    public function circumference(): float
    {
        return round($this->a + $this->b + $this->c, 2);
    }
}
