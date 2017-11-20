<?php

namespace AbstractFactory;

/**
 * Class Page
 * @package AbstractFactory
 */
class Page
{
	const READER_KEY = 'reader';
	const WRITER_KEY = 'writer';

	/**
	 * @var DocumentFactoryInterface
	 */
	private $factory;

	/**
	 * Page constructor.
	 *
	 * @param DocumentFactoryInterface $factory
	 */
	public function __construct(DocumentFactoryInterface $factory)
	{
		$this->factory = $factory;
	}

	/**
	 * @return array
	 */
	public function generate(): array
	{
		return [
			self::READER_KEY => $this->factory->createReader(),
			self::WRITER_KEY => $this->factory->createWriter()
		];
	}
}