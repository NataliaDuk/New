<?php
class Dec extends Table
{
    public function costDm(): float
    {
        return ($this->squareTop * 10 + $this->heigtLeg * 10 + 20);
    }
}