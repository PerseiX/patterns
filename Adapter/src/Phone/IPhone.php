<?php

namespace Adapter\Phone;

use Adapter\Chargers\IphoneChargerInterface;

class IPhone implements IOSInterface
{
    /**
     * @var boolean
     */
    public $charged = false;

    /**
     * @param IphoneChargerInterface $charger
     */
    public function charge(IphoneChargerInterface $charger): void
    {
        $charger->charge($this);
    }

    /**
     * @return bool
     */
    public function isCharged(): bool
    {
        return $this->charged;
    }

    /**
     * @return bool
     */
    public function setAsCharged(): bool
    {
        $this->charged = true;

        return true;
    }
}
