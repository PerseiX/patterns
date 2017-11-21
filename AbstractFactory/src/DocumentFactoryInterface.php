<?php

namespace AbstractFactory;

use AbstractFactory\Elements\ReaderInterface;
use AbstractFactory\Elements\WriterInterface;

/**
 * Class DocumentFactory
 */
interface DocumentFactoryInterface
{
	/**
	 * @return ReaderInterface
	 */
	public function createReader(): ReaderInterface;

	/**
	 * @return WriterInterface
	 */
	public function createWriter(): WriterInterface;
}