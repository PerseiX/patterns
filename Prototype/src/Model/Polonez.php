<?php

namespace Prototype\Model;

class Polonez extends AbstractCar
{
    /**
     * @var string
     */
    private $name;

    // If created by cloning - never fire
    public function __construct()
    {
    }

    public function __clone()
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Polonez
     */
    public function setName(string $name): Polonez
    {
        $this->name = $name;
        return $this;
    }



}
