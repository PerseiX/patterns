<?php

namespace AbstractFactory;

use AbstractFactory\Elements\WriterInterface;
	use AbstractFactory\Elements\ReaderInterface;
use AbstractFactory\Elements\PDFReader;
use AbstractFactory\Elements\PdfWriter;

/**
 * Class PDFFactory
 * @package AbstractFactory
 */
class PDFFactory implements DocumentFactoryInterface
{

	/**
	 * @return ReaderInterface
	 */
	public function createReader(): ReaderInterface
	{
		return new PDFReader();
	}

	/**
	 * @return WriterInterface
	 */
	public function createWriter(): WriterInterface
	{
		return new PdfWriter();
	}
}