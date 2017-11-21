<?php

namespace AbstractFactory\Elements;

/**
 * Class AbstractProduct
 * @package AbstractFactory\Elements
 */
interface ReaderInterface
{
	/**
	 * @return string
	 */
	public function read(): string;
}