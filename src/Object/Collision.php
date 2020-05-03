<?php

namespace App\Object;

class Collision
{
    private const WEIGHT = 'weight';
    private const SPEED = 'speed';
    private const UPDATE = 'update';

    private array $participants = [];

    private $onReady;


    public function __construct(callable $onReady)
    {
        $this->onReady = $onReady;
    }

    public function addParticipant(float $weight, float $speed, callable $update)
    {
        $this->participants[] = [
            self::WEIGHT => $weight,
            self::SPEED => $speed,
            self::UPDATE => $update,
        ];

        if(count($this->participants) == 2) {
            ($this->onReady)(function() {$this->run();});
        }
    }

    private function run(): void
    {
        $weightDiff = $this->participants[0][self::WEIGHT] - $this->participants[1][self::WEIGHT];
        $weightSum = $this->participants[0][self::WEIGHT] + $this->participants[1][self::WEIGHT];
        $this->participants[0][self::UPDATE](
            ($weightDiff * $this->participants[0][self::SPEED]) / $weightSum
        );
        $this->participants[1][self::UPDATE](
            (2 * $this->participants[0][self::WEIGHT] * $this->participants[0][self::SPEED]) / $weightSum
        );
    }
}