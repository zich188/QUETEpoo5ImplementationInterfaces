<?php
require_once "vehicle.php";

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() >= 10)
        {
            return true;
        } else
            return  false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
