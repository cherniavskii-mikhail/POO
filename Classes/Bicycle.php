<?php

class Bicycle
{
    /*
    * Attributes
    */ 
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private bool $hasLuggageRack;


    /*
    * Constructor
    */ 
    public function __construct(string $color)
    {
        $this->color = $color;
    }


    /*
    * Methos for the class Car
    */ 
    public function forward(): string
    {
        $this->currentSpeed = 5;
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

    /*
    * Getters for our attributes
    */
    public function getNbWheels(): int { return $this->nbWheels; }
    public function getCurrentSpeed(): int { return $this->currentSpeed; }
    public function getColor(): string { return $this->color; }
    public function getNbSeats(): int { return $this->nbSeats; }
    public function getHasLuggageRack(): bool { return $this->hasLuggageRack; }
}

?>