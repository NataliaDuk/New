<?php


class Meter extends TableCost

{
    public function priceM(): float
    {
        return ($this->a * 100 + $this->b * 100 + 20);
    }

}