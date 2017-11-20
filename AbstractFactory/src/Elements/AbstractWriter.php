<?php

namespace AbstractFactory\Elements;

/**
 * Class AbstractWriter
 * @package AbstractFactory\Elements
 */
abstract class AbstractWriter
{
	/**
	 * @return string
	 */
	public abstract function write(): string;
}