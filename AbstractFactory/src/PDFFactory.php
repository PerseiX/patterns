<?php

namespace AbstractFactory;

use AbstractFactory\Elements\AbstractReader;
use AbstractFactory\Elements\AbstractWriter;
use AbstractFactory\Elements\PDFReader;
use AbstractFactory\Elements\PdfWriter;

/**
 * Class PDFFactory
 * @package AbstractFactory
 */
class PDFFactory implements DocumentFactoryInterface
{

	/**
	 * @return AbstractReader
	 */
	public function createReader(): AbstractReader
	{
		return new PDFReader();
	}

	/**
	 * @return AbstractWriter
	 */
	public function createWriter(): AbstractWriter
	{
		return new PdfWriter();
	}
}