<?php

namespace App\Object\Rigid;

use App\Object\FrontalImpact;

class Sphere implements Rigid
{
    private float $weight;
    private float $speed;

    public function __construct(float $weight, float $speed)
    {
        $this->weight = $weight;
        $this->speed = $speed;
    }

    public function impact(FrontalImpact $impact)
    {
        // TODO: Implement impact() method.
    }

    public function toArray(): array
    {
        return [
          'weight' => $this->weight,
          'speed' => $this->speed,
        ];
    }
}