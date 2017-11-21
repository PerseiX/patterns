<?php

namespace AbstractFactory\Elements;

/**
 * Class PdfWriter
 * @package AbstractFactory\Elements
 */
class PdfWriter implements WriterInterface
{

	/**
	 * @return string
	 */
	public function write(): string
	{
		return "PDF write";
	}
}