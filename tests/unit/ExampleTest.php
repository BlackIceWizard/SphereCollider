<?php

use Codeception\Test\Unit;

class ExampleTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;
    
    protected function setUp(): void
    {

    }

    // tests
    public function testSomeFeature()
    {
        $this->assertEquals(12,12);
    }
}