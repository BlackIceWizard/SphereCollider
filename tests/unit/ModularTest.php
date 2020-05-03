<?php

use App\Object\FrontalImpact;
use App\Object\Rigid\Sphere;
use Codeception\Test\Unit;

class ModularTest extends Unit
{
    private const SPEED = 'speed';

    public function test_all_these_is_working()
    {
        $sphere1 = new Sphere(5, 100);
        $sphere2 = new Sphere(20, 0);

        $phenomenon = new FrontalImpact($sphere1, $sphere2);
        $phenomenon->happen();

        $this->assertEquals(-60.0, $sphere1->toArray()[self::SPEED]);
        $this->assertEquals(40.0, $sphere2->toArray()[self::SPEED]);
    }
}