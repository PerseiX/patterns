<?php

namespace Builder\Parts;

/**
 * Class Vehicle
 * @package Builder\Parts
 */
abstract class Vehicle
{
	/**
	 * @var array
	 */
	private $elements;

	/**
	 * @param string        $key
	 * @param PartInterface $value
	 *
	 * @return Vehicle
	 */
	public function addElement(string $key, PartInterface $value): Vehicle
	{
		$this->elements[$key] = $value;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getElements(): array
	{
		return $this->elements;
	}
}