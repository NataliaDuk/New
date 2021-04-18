<?php


class Decimetre extends TableCost
{
    public function priceDm(): float
    {
        return ($this->a * 10 + $this->b * 10 + 20);
    }

}