<?php
final class  PedestrianWay extends HighWay{

    protected $maxSpeed = 10;

    protected $nbLane = 1;

    public function addVehicule(Vehicule $vehicule)
    {
        if($vehicule instanceof Bycicle)
            $this->currentVehicules[] = $vehicule;
        if($vehicule instanceof Skatebord)
            $this->currentVehicules[] = $vehicule;

    }








}