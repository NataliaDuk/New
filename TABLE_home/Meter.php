<?php
class Meter extends Table
{
    public function costM(): float
    {
        return ($this->squareTop * 100 + $this->heigtLeg * 100 + 20);
    }
}