<?php

namespace Builder;

use Builder\Parts\Vehicle;

/**
 * Interface BuilderInterface
 * @package Builder
 */
interface BuilderInterface
{
	/**
	 * @return void
	 */
	public function createVehicle(): void;

	/**
	 * @return void
	 */
	public function addDoors(): void;

	/**
	 * @return void
	 */
	public function addWheels(): void;

	/**
	 * @return void
	 */
	public function addEngine(): void;

	/**
	 * @return Vehicle
	 */
	public function getVehicle(): Vehicle;
}