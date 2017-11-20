<?php

namespace AbstractFactory\Elements;

/**
 * Class Car
 * @package AbstractFactory\Elements
 */
class RTFReader extends AbstractReader
{

	/**
	 * @return string
	 */
	public function read(): string
	{
		return "RTF read...";
	}
}