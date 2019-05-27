<?php

namespace Adapter\Chargers;

use Adapter\Phone\SystemInterface;

interface ChargerInterface
{
    /**
     * @param SystemInterface $system
     * @return bool
     */
    public function charge(SystemInterface $system): bool;
}
