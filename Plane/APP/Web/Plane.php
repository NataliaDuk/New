<?php

namespace Web;
class Plane
{
    protected string $reserve;
    protected string $consumption;

    public function __construct($reserve, $consumption)
    {
        $this->setReserve($reserve);
        $this->setConsumption($consumption);
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
    public function flightRange(): float
    {
        return $this->reserve / $this->consumption;
    }


}