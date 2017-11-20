<?php

namespace AbstractFactory;

use AbstractFactory\Elements\AbstractReader;
use AbstractFactory\Elements\AbstractWriter;
use AbstractFactory\Elements\RTFReader;
use AbstractFactory\Elements\RTFWriter;

/**
 * Class ReaderFactory
 * @package AbstractFactory
 */
class RTFFactory implements DocumentFactoryInterface
{

	/**
	 * @return AbstractReader
	 */
	public function createReader(): AbstractReader
	{
		return new RTFReader();
	}

	/**
	 * @return AbstractWriter
	 */
	public function createWriter(): AbstractWriter
	{
		return new RTFWriter();
	}
}