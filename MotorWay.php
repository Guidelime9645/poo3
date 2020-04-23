<?php
final class  MotorWay extends HighWay{

protected $maxSpeed = 130;

protected $nbLane = 4;

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Vehicule)
            $this->currentVehicules[] = $vehicule;
    }








}