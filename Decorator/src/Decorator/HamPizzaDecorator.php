<?php

namespace Decorator\Decorator;

use Decorator\BasePizza;

class HamPizzaDecorator extends BasePizza
{
    /**
     * @var BasePizza
     */
    private $pizza;

    /**
     * HamDecorator constructor.
     * @param BasePizza $pizza
     */
    public function __construct(BasePizza $pizza)
    {
        $this->pizza = $pizza;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->pizza->getName() . ' with ham';
    }

    /**
     * @return float
     */
    public function calculateCost(): float
    {
        return $this->pizza->calculateCost() + 4.5;
    }
}
