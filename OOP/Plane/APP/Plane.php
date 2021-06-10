<?php


class Plane
{
    protected string $seats;
    protected string $passengers;
    protected string $reserve;
    protected string $consumption;

    public function __construct($seats, $passengers, $reserve, $consumption)
    {
        $this->seats=$seats;
        $this->passengers=$passengers;
        $this->reserve=$reserve;
        $this->consumption=$consumption;
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

    /**
     * @param string $reserve
     */
    public function setReserve(string $reserve): static
    {
        $this->reserve = $reserve;
        return $this;
    }

    /**
     * @param string $consumption
     */
    public function setConsumption(string $consumption): static
    {
        $this->consumption = $consumption;
        return $this;
    }
    public function flightRange {
       return $this->reserve/$this->consumption;
    }
    public function availableSeats {
        return $this->seats-$this->passengers;
    }

}