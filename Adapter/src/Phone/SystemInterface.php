<?php

namespace Adapter\Phone;

interface SystemInterface
{
    /**
     * @return bool
     */
    public function setAsCharged(): bool;
}
