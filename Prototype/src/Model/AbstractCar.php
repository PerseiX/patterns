<?php


namespace Prototype\Model;


abstract class AbstractCar
{
    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $currency;

    /**
     * @return mixed
     */
    public abstract function __clone();

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return AbstractCar
     */
    public function setCountry(string $country): AbstractCar
    {
        $this->country = $country;
        return $this;
    }


    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return AbstractCar
     */
    public function setCurrency(string $currency): AbstractCar
    {
        $this->currency = $currency;
        return $this;
    }


}
