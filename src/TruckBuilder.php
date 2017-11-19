<?php

namespace Builder;

use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Truck;
use Builder\Parts\Vehicle;
use Builder\Parts\Wheel;

/**
 * Class TruckBuilder
 * @package Builder
 */
class TruckBuilder implements BuilderInterface
{

	/**
	 * @var Truck
	 */
	private $truck;

	/**
	 * @return void
	 */
	public function createVehicle(): void
	{
		$this->truck = new Truck();
	}

	/**
	 * @return void
	 */
	public function addDoors(): void
	{
		$this->truck->addElement('left', new Door());
		$this->truck->addElement('right', new Door());
	}

	/**
	 * @return void
	 */
	public function addWheels(): void
	{
		$this->truck->addElement('wheel_1', new Wheel());
		$this->truck->addElement('wheel_2', new Wheel());
		$this->truck->addElement('wheel_3', new Wheel());
		$this->truck->addElement('wheel_4', new Wheel());
		$this->truck->addElement('wheel_5', new Wheel());
		$this->truck->addElement('wheel_6', new Wheel());
		$this->truck->addElement('wheel_7', new Wheel());
		$this->truck->addElement('wheel_8', new Wheel());
	}

	/**
	 * @return void
	 */
	public function addEngine(): void
	{
		$this->truck->addElement('truck_engine', new Engine());
	}

	/**
	 * @return Vehicle
	 */
	public function getVehicle(): Vehicle
	{
		return $this->truck;
	}
}