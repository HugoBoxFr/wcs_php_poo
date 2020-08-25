<?php 

require_once 'Vehicle.php';

class Truck extends Vehicle 
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

    /**
     * @var integer
     */
    private $storageCapacity;

    /**
     * @var integer
     */
    private $loading = 0;


    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        $this->storageCapacity = $storageCapacity;
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function getStorageCapacity() {
        return $this->$storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): int 
    {
        $this->$storageCapacity = $storageCapacity;
    }

    public function getLoading() {
        return $this->$loading;
    }

    public function setLoading(int $loading): int 
    {
        $this->$loading = $loading;
    }

    public function isFilling(): string
    {
        $sentence = "";
        while ($this->loading < $this->storageCapacity) {
            $this->loading++;
            $sentence .= "in filling... ";
        }

        $sentence .= "full";
        return $sentence;
    }

}