<?php

class Car
{
    /*
    * Attributes
    */ 
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    /*
    * Constructor
    */ 
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /*
    * Methos for the class Car
    */ 
    public function forward(): string
    {
        $this->currentSpeed = 10;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;
            $sentence .= "Brake !!!";

        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function start(){}


    /*
    * Getters for our attributes
    */
    public function getNbWheels(): int { return $this->nbWheels; }
    public function getCurrentSpeed(): int { return $this->currentSpeed; }
    public function getColor(): string { return $this->color; }
    public function getNbSeats(): int { return $this->nbSeats; }
    public function getNbEnergy(): string { return $this->energy; }
    public function getEnergyLevel(): int { return $this->energyLevel; }

     
}

?>