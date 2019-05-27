<?php

namespace Adapter;

use Adapter\Chargers\Adapter\LightningChargerAdapter;
use Adapter\Chargers\MicroUSBAndroidCharger;
use Adapter\Phone\IPhone;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapterIphone()
    {
        $microUSBCharger = new MicroUSBAndroidCharger();
        $lightningAdapter = new LightningChargerAdapter($microUSBCharger);

        $iphone = new IPhone();
        $iphone->charge($lightningAdapter);

        $this->assertTrue($iphone->isCharged());
    }
}
