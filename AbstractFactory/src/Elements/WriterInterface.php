<?php

namespace AbstractFactory\Elements;

/**
 * Interface WriterInterface
 * @package AbstractFactory\Elements
 */
interface WriterInterface
{
	/**
	 * @return string
	 */
	public function write(): string;
}