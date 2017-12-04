<?php

namespace FactoryMethod;

use FactoryMethod\Model\Audi;
use FactoryMethod\Model\Bmw;
use Prophecy\Exception\Doubler\ClassNotFoundException;

/**
 * Class GermanCarFactory
 * @package FactoryMethod
 */
class DeutschCarFactory implements FactoryMethod
{
	/**
	 * @param string $type
	 *
	 * @return mixed
	 */
	public function create(string $type)
	{
		if ($type === FactoryMethod::CAR['ger_car_first']) {
			return new Audi();
		}
		if ($type === FactoryMethod::CAR['ger_car_second']) {
			return new Bmw();
		}

		throw new ClassNotFoundException("This class doesn't exist.", $type);
	}
}