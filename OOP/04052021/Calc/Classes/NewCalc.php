<?php


class NewCalc extends Calc
{
    public function div(): float
    {
        return $this->a / $this->b;
    }

    public function diff(): float
    {
        return $this->a - $this->b;
    }
}