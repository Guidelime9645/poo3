<?php


require_once 'vehicule.php';

class Car extends Vehicule
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private boolean $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(boolean $hasParkBrake): boolean{
        if($this->hasParkBrake = true){
            $this->hasParkBrake = $hasParkBrake;
        }
        return $this;
    }
    public function getParkBrake(): string
    {
        return $this->hasParkBrake;
    }
    public function start()
    {
        try {
            if ($hasParkBrake === true)
            {
                throw new Exception("frein a main actif");
            } catch(Exception $e)
            {
                return $this->hasParkBrake = false;
            }finally
            {
                return "“Ma voiture roule comme un donut”";

            }
    }
}
