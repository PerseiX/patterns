<?php

namespace FactoryMethod;

use Prophecy\Exception\Doubler\ClassNotFoundException;
use FactoryMethod\Model\Polonez;

/**
 * Class PolandFactory
 * @package FactoryMethod
 */
class PolishCarFactory implements FactoryMethod
{

	/**
	 * @param string $type
	 *
	 * @return mixed
	 */
	public function create(string $type)
	{
		if ($type === FactoryMethod::CAR['pl_car']) {
			return new Polonez();
		}

		throw new ClassNotFoundException("This class doesn't exist.", $type);
	}
}