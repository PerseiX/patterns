<?php

namespace FactoryMethod;

use FactoryMethod\Model\Polonez;
use PHPUnit\Framework\TestCase;
use FactoryMethod\Model\Audi;
use FactoryMethod\Model\Bmw;

/**
 * Class MainTest
 */
class MainTest extends TestCase
{

	public function testPolishCar()
	{
		$polishCarFactory = new PolishCarFactory();
		$car              = $polishCarFactory->create(FactoryMethod::CAR['pl_car']);
		$this->assertInstanceOf(Polonez::class, $car);
	}

	public function testDeutschCar()
	{
		$deutschCarFactory = new DeutschCarFactory();
		$car              = $deutschCarFactory->create(FactoryMethod::CAR['ger_car_first']);
		$this->assertInstanceOf(Audi::class, $car);
		$car = $deutschCarFactory->create(FactoryMethod::CAR['ger_car_second']);
		$this->assertInstanceOf(Bmw::class, $car);
	}

	public function testNotFound()
	{
        $this->expectException('Prophecy\Exception\Doubler\ClassNotFoundException');
		$factory = new PolishCarFactory();
		$factory->create('my-type');
	}
}
