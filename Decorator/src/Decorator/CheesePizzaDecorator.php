<?php


namespace Decorator\Decorator;


use Decorator\BasePizza;

class CheesePizzaDecorator extends BasePizza
{
    /**
     * @var BasePizza
     */
    private $basePizza;

    public function __construct(BasePizza $basePizza)
    {
        $this->basePizza = $basePizza;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->basePizza->getName() . ' with cheese';
    }

    /**
     * @return float
     */
    public function calculateCost(): float
    {
        return $this->basePizza->calculateCost() + 2.0;
    }
}
