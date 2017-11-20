<?php

namespace AbstractFactory\Elements;

/**
 * Class PDFReader
 * @package AbstractFactory\Elements
 */
class PDFReader extends AbstractReader
{

	/**
	 * @return string
	 */
	public function read(): string
	{
		return "PDF read...";
	}
}