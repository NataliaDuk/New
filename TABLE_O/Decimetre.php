<?php


class Decimetre extends Table
{
    public function priceDm(): float
    {
        return ($this->a * 10 + $this->b * 10 + 20);
    }

}