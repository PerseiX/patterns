<?php

namespace Builder;

use PHPUnit\Framework\TestCase;

/**
 * Class DirectorTest
 * @package Builder
 */
class DirectorTest extends TestCase
{
    /**
     * @var Director
     */
    private $director;

    protected function setUp(): void
    {
        $this->director = new Director();
    }


    public function testCar()
    {
        $carBuilder = new CarBuilder();
        $car = $this->director->build($carBuilder);

        $this->assertEquals(count($car->getElements()), 9);
        $this->assertTrue(is_array($car->getElements()));
    }

    public function testTruck()
    {
        $carBuilder = new TruckBuilder();
        $car = $this->director->build($carBuilder);

        $this->assertEquals(count($car->getElements()), 11);
        $this->assertTrue(is_array($car->getElements()));
    }
}
