<?php


class Calc extends AbstractCalc
{
    public function sum(): float
    {
        return $this->a + $this->b;
    }
    public function mult(): float
    {
        return $this->a * $this->b;
    }
}