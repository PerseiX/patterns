<?php

namespace Adapter\Chargers;

use Adapter\Phone\SystemInterface;

class MicroUSBAndroidCharger
{

    /**
     * @param SystemInterface $system
     * @return bool
     */
    public function charge(SystemInterface $system): bool
    {
        $system->setAsCharged();
        return true;
    }
}
