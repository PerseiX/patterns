<?php

namespace AbstractFactory;

use AbstractFactory\Elements\ReaderInterface;
use AbstractFactory\Elements\WriterInterface;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{

	public function testPdf()
	{
		$pdfFactory = new PDFFactory();

		$reader = $pdfFactory->createReader();
		$writer = $pdfFactory->createWriter();

		$this->assertInstanceOf(ReaderInterface::class, $reader);
		$this->assertInstanceOf(WriterInterface::class, $writer);
		$this->assertEquals('PDF read', $reader->read());
		$this->assertEquals('PDF write', $writer->write());
	}

	public function testRtf()
	{
		$rtfFactory = new RTFFactory();

		$reader = $rtfFactory->createReader();
		$writer = $rtfFactory->createWriter();

		$this->assertInstanceOf(ReaderInterface::class, $reader);
		$this->assertInstanceOf(WriterInterface::class, $writer);
		$this->assertEquals('RTF read', $reader->read());
		$this->assertEquals('RTF write', $writer->write());
	}
}
