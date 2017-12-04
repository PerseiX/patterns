<?php

namespace FactoryMethod\Model;

/**
 * Class Bmw
 * @package FactoryMethod
 */
class Bmw implements Car
{

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return 'bmw';
	}
}