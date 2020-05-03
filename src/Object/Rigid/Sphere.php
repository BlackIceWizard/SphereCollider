<?php

namespace App\Object\Rigid;

use App\Object\Collision;

class Sphere implements Rigid
{
    private float $weight;
    private float $speed;

    public function __construct(float $weight, float $speed)
    {
        $this->weight = $weight;
        $this->speed = $speed;
    }

    public function impact(Collision $collision)
    {
        $collision->addParticipant($this->weight, $this->speed, function (float $newSpeed) {
            $this->speed = $newSpeed;
        });
    }

    public function toArray(): array
    {
        return [
          'weight' => $this->weight,
          'speed' => $this->speed,
        ];
    }
}