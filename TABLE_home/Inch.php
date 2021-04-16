<?php
class Inch extends Table
{
    public function costInch(): float
    {
        return ($this->squareTop * 2.5 + $this->heigtLeg * 2.5 + 20);
    }
}