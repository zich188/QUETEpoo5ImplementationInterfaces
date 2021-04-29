<?php


class CharginStation
{
    public function fullCharge(RechargeableInterface $vehicle)
    {
        $vehicle->charge(100);
    }
}