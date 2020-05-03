<?php

namespace App\Object\Rigid;

class Sphere
{
    private float $weight;
    private float $speed;

    public function __construct(float $weight, float $speed)
    {
        $this->weight = $weight;
        $this->speed = $speed;
    }
}