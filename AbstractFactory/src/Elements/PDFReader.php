<?php

namespace AbstractFactory\Elements;

/**
 * Class PDFReader
 * @package AbstractFactory\Elements
 */
class PDFReader implements ReaderInterface
{

	/**
	 * @return string
	 */
	public function read(): string
	{
		return "PDF read";
	}
}