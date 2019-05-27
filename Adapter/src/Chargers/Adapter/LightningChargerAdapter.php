<?php

namespace Adapter\Chargers\Adapter;

use Adapter\Chargers\IphoneChargerInterface;
use Adapter\Chargers\MicroUSBAndroidCharger;
use Adapter\Phone\SystemInterface;

class LightningChargerAdapter implements IphoneChargerInterface
{
    /**
     * @var MicroUSBAndroidCharger
     */
    private $charger;

    /**
     * LightningAdapter constructor.
     * @param MicroUSBAndroidCharger $charger
     */
    public function __construct(MicroUSBAndroidCharger $charger)
    {
        $this->charger = $charger;
    }


    /**
     * @param SystemInterface $IPhone
     * @return bool
     */
    public function charge(SystemInterface $IPhone): bool
    {
        return $this->charger->charge($IPhone);
    }
}
