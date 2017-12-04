<?php

namespace FactoryMethod;

/**
 * Class FactoryMethod
 * @package FactoryMethod
 */
interface FactoryMethod
{
	const CAR = [
		'pl_car'         => 'polonez',
		'ger_car_first'  => 'audi',
		'ger_car_second' => 'bmw'
	];

	/**
	 * @param string $type
	 *
	 * @return mixed
	 */
	public function create(string $type);
}