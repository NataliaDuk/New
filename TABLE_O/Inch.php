<?php


class Inch extends TableCost
{
    public function priceInch(): float
    {
        return ($this->a * 2.5 + $this->b * 2.5 + 20);

    }
}