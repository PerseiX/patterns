<?php

use AbstractFactory\DocumentFactoryInterface;
use AbstractFactory\Page;
use AbstractFactory\PDFFactory;
use AbstractFactory\RTFFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$pdfFactory = new PDFFactory();
$rtfFactory = new RTFFactory();
test($pdfFactory);
test($rtfFactory);

/**
 * @param DocumentFactoryInterface $factory
 */
function test(DocumentFactoryInterface $factory)
{
	$pdfPage = new Page($factory);
	$objects = $pdfPage->generate();

	print_r([
			$objects[Page::READER_KEY]->read(),
			$objects[Page::WRITER_KEY]->write()
		]
	);
}