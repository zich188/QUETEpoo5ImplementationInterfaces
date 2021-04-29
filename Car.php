<?php

require_once "vehicle.php";
require_once "LightableInterface.interface.php";

class Car extends Vehicle implements LightableInterface
{

    private string $energy;
    private int $energyLevel;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent:: __construct($color,$nbSeats);
        $this->setEnergy($energy);
    }


    public function start()
    {
        return "vroom !";
    }


    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy=$energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake($hasparkbrake)
    {
        $this->hasparkbrake = $hasparkbrake;
        return $this;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function switchOn(): bool
    {
        return true;
    }

}