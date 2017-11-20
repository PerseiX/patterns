<?php

namespace AbstractFactory\Elements;

/**
 * Class RTFWriter
 * @package AbstractFactory\Elements
 */
class RTFWriter extends AbstractWriter
{

	/**
	 * @return string
	 */
	public function write(): string
	{
		return "WRITE rtf..";
	}
}