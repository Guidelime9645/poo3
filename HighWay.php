<?php
use vehicule;
 abstract class HighWay{
    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;


    abstract function addVehicule(vehicule $vehicule){
    }

    public function getCurrentVehicle(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicle(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function getNblane(): integer
    {
        return $this->nbLane;
    }

    public function setNblane(integer $nblane): void
    {
        $this->nbLane = $nblane;
    }
    public function getMaxspeed(): integer
    {
        return $this->maxSpeed;
    }

    public function setMaxspeed(integer $maxspeed): void
    {
        $this->maxSpeed = $maxspeed;
    }
}