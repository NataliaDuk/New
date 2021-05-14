<?php
namespace Duk;
class Calc {
    protected float $a;
    protected float $b;

    public function  __construct($a, $b)
    {
        $this->a=$a;
        $this->a=$b;

    }
    public function sum(): float
    {
       return $this->a+$this->b;
    }
}