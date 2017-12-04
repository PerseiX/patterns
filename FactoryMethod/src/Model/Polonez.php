<?php

namespace FactoryMethod\Model;

/**
 * Class Polonez
 * @package FactoryMethod
 */
class Polonez implements Car
{

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return 'polonez';
	}
}