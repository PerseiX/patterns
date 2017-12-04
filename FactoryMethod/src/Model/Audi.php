<?php

namespace FactoryMethod\Model;

/**
 * Class Audi
 * @package FactoryMethod
 */
class Audi implements Car
{

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return "audi";
	}
}