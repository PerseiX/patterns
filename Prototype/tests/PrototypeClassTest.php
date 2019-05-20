<?php

namespace Prototype;

use PHPUnit\Framework\TestCase;
use Prototype\Model\Fiat;

class PrototypeClassTest extends TestCase
{
    public function testPrototypeConstruction(){
        $fiat = new Fiat();
        $fiat
            ->setName('Fiat')
            ->setCountry('Poland')
            ->setCurrency('pl');

        $polonez = clone $fiat;
        $polonez
            ->setName('Polonez')
            ->setModelNumber('126p');

        $this->assertSame($polonez->getCountry(), $fiat->getCountry());
        $this->assertSame($polonez->getCurrency(), $fiat->getCurrency());
        $this->assertNotSame($polonez, $fiat);

        $this->assertEquals('Polonez', $polonez->getName());
        $this->assertEquals('Fiat', $fiat->getName());
    }
}
