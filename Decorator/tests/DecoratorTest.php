<?php

namespace Decorator;

use Decorator\Decorator\CheesePizzaDecorator;
use Decorator\Decorator\HamPizzaDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testSmallPizza()
    {
        $smallPizza = new SmallPizza();
        $this->assertEquals(6.5, $smallPizza->calculateCost());
        $this->assertEquals('Small pizza', $smallPizza->getName());
        $this->assertInstanceOf(SmallPizza::class, $smallPizza);

        $hamDecoratedPizza = new HamPizzaDecorator($smallPizza);
        $this->assertEquals(11, $hamDecoratedPizza->calculateCost());
        $this->assertEquals('Small pizza with ham', $hamDecoratedPizza->getName());
        $this->assertInstanceOf(HamPizzaDecorator::class, $hamDecoratedPizza);

        $cheeseAndHamDecoratedPizza = new CheesePizzaDecorator($hamDecoratedPizza);
        $this->assertEquals(13, $cheeseAndHamDecoratedPizza->calculateCost());
        $this->assertEquals('Small pizza with ham with cheese', $cheeseAndHamDecoratedPizza->getName());
        $this->assertInstanceOf(CheesePizzaDecorator::class, $cheeseAndHamDecoratedPizza);

    }
}
