<?php
require_once "vehicule.php";

class truck extends Vehicule
{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public $contenant;

    public function getcontenant()
    {
        return $this->contenant;

    }

    public function setcontenant($conteant)
    {
        $this->contenant = $conteant;
    }
    public function isfull()
    {

        if($this->contenant>0){
            return "full";
        }
        else{
            return "in_filling";
        }
    }
}