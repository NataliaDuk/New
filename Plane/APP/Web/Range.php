<?php


namespace Web;

public function __construct($seats, $passengers)
{
    $this->setSeats($seats);
    $this->setPassengers($passengers);

}
class Range extends Plane
{
    public function flightRange(): float
    {
        return $this->reserve / $this->consumption;
    }
}