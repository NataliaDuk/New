<?php


class Calc
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function sum()
    {
        return $this->a + $this->b;
    }
}
