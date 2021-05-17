<?php

namespace First;

class Calc
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function sum(): float
    {
        return $this->a+$this->b;
    }

    public function multi(): float
    {
        return $this->a*$this->b;
    }

}