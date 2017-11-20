<?php

namespace AbstractFactory;

use AbstractFactory\Elements\AbstractReader;
use AbstractFactory\Elements\AbstractWriter;

/**
 * Class DocumentFactory
 */
interface DocumentFactoryInterface
{
	/**
	 * @return AbstractReader
	 */
	public function createReader(): AbstractReader;

	/**
	 * @return AbstractWriter
	 */
	public function createWriter(): AbstractWriter;
}