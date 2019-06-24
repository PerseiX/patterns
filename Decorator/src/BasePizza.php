<?php

namespace Decorator;

/**
 * Class BasePizza
 * @package Decorator
 */
abstract class BasePizza
{
    /**
     * @return string
     */
    abstract public function getName(): string;

    /**
     * @return float
     */
    public abstract function calculateCost(): float;
}
