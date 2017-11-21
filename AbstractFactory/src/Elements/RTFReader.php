<?php

namespace AbstractFactory\Elements;

/**
 * Class RTFReader
 * @package AbstractFactory\Elements
 */
class RTFReader implements ReaderInterface
{

	/**
	 * @return string
	 */
	public function read(): string
	{
		return "RTF read";
	}
}