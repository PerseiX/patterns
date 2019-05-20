<?php


namespace Prototype\Model;


class Fiat extends AbstractCar
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $modelNumber;

    /**
     * @return mixed
     */
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
     * @return Fiat
     */
    public function setName(string $name): Fiat
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelNumber(): string
    {
        return $this->modelNumber;
    }

    /**
     * @param string $modelNumber
     * @return Fiat
     */
    public function setModelNumber(string $modelNumber): Fiat
    {
        $this->modelNumber = $modelNumber;
        return $this;
    }

}
