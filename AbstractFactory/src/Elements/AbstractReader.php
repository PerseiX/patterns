<?php

namespace AbstractFactory\Elements;

/**
 * Class AbstractProduct
 * @package AbstractFactory\Elements
 */
abstract class AbstractReader
{
	/**
	 * @return string
	 */
	public abstract function read(): string;
}