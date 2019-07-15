<?php

namespace Decorator;

class SmallPizza extends BasePizza
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Small pizza';
    }

    /**
     * @return float
     */
    public function calculateCost(): float
    {
        return 6.5;
    }
}
