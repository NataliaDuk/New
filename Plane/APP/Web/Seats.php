<?php


namespace Web;

class Seats 
{
        protected string $seats;
        protected string $passengers;
    
        public function __construct($seats, $passengers)
        {
            $this->setSeats($seats);
            $this->setPassengers($passengers);
        }
        
    /**
     * @param string $seats
     */
    public function setSeats(string $seats): static
    {
        $this->seats = $seats;
        return $this;
    }

    /**
     * @param string $passengers
     */
    public function setPassengers(string $passengers): static
    {
        $this->passengers = $passengers;
        return $this;
    }


    public function availableSeats(): string
    {
        return $this->seats - $this->passengers;
    }
}