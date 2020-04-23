<?php
final class  PedestrianWay extends HighWay{

    protected $maxSpeed = 50;

    protected $nbLane = 2;

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Vehicule )
            $this->currentVehicules[] = $vehicule;
    }







}
