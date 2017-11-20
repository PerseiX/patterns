<?php

namespace Builder;

use Builder\Parts\Car;
use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Vehicle;
use Builder\Parts\Wheel;

/**
 * Class CarBuilder
 * @package Builder
 */
class CarBuilder implements BuilderInterface
{

	/**
	 * @var Car
	 */
	private $car;

	/**
	 * @return void
	 */
	public function createVehicle(): void
	{
		$this->car = new Car();
	}

	/**
	 * @return void
	 */
	public function addDoors(): void
	{
		$this->car->addElement('up_left', new Door());
		$this->car->addElement('up_right', new Door());
		$this->car->addElement('down_left', new Door());
		$this->car->addElement('down_right', new Door());
	}

	/**
	 * @return void
	 */
	public function addWheels(): void
	{
		$this->car->addElement('wheel_1', new Wheel());
		$this->car->addElement('wheel_2', new Wheel());
		$this->car->addElement('wheel_3', new Wheel());
		$this->car->addElement('wheel_4', new Wheel());
	}

	/**
	 * @return void
	 */
	public function addEngine(): void
	{
		$this->car->addElement('engine', new Engine());
	}

	/**
	 * @return Vehicle
	 */
	public function getVehicle(): Vehicle
	{
		return $this->car;
	}
}