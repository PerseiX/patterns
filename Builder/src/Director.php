<?php

namespace Builder;

use Builder\Parts\Vehicle;

/**
 * Class Director
 */
class Director
{
	/**
	 * @param BuilderInterface $builder
	 *
	 * @return Vehicle
	 */
	public function build(BuilderInterface $builder): Vehicle
	{
		$builder->createVehicle();
		$builder->addDoors();
		$builder->addWheels();
		$builder->addEngine();

		return $builder->getVehicle();
	}
}