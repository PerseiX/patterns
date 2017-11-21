<?php

namespace AbstractFactory;

use AbstractFactory\Elements\ReaderInterface;
use AbstractFactory\Elements\WriterInterface;
use AbstractFactory\Elements\RTFReader;
use AbstractFactory\Elements\RTFWriter;

/**
 * Class ReaderFactory
 * @package AbstractFactory
 */
class RTFFactory implements DocumentFactoryInterface
{

	/**
	 * @return ReaderInterface
	 */
	public function createReader(): ReaderInterface
	{
		return new RTFReader();
	}

	/**
	 * @return WriterInterface
	 */
	public function createWriter(): WriterInterface
	{
		return new RTFWriter();
	}
}