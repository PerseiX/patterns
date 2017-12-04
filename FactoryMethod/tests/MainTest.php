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
		$deutschCarFacort = new DeutschCarFactory();
		$car              = $deutschCarFacort->create(FactoryMethod::CAR['ger_car_first']);
		$this->assertInstanceOf(Audi::class, $car);
		$car = $deutschCarFacort->create(FactoryMethod::CAR['ger_car_second']);
		$this->assertInstanceOf(Bmw::class, $car);
	}

	/**
	 * @expectedException Prophecy\Exception\Doubler\ClassNotFoundException
	 */
	public function testNotFound()
	{
		$factory = new PolishCarFactory();
		$factory->create('my-type');
	}
}