<?php


namespace Web;

public function __construct($seats, $passengers)
{
    $this->setSeats($seats);
    $this->setPassengers($passengers);

}
class Seats extends Plane
{

    public function availableSeats(): float
    {
        return $this->seats - $this->passengers;
    }
}