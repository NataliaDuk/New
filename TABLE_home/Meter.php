<?php
class Meter extends TableCost
{
    public function costM(): float
    {
        return ($this->squareTop * 100 + $this->heigtLeg * 100 + 20);
    }
}