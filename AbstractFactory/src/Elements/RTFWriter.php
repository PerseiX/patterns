<?php

namespace AbstractFactory\Elements;

/**
 * Class RTFWriter
 * @package AbstractFactory\Elements
 */
class RTFWriter implements WriterInterface
{

	/**
	 * @return string
	 */
	public function write(): string
	{
		return "RTF write";
	}
}