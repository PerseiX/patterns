<?php

namespace AbstractFactory\Elements;

/**
 * Class PdfWriter
 * @package AbstractFactory\Elements
 */
class PdfWriter extends AbstractWriter
{

	/**
	 * @return string
	 */
	public function write(): string
	{
		return "WRITE pdf..";
	}
}