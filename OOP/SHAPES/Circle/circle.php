<?php

class Circle
{
    public float $r;


    public function __construct($r)
    {
        $this->r=$r;
    }
    public function squareCircle()
    {
        return $this->r**2*pi();
    }
    public function perimCircle()
    {
        return $this->r*2*pi();
    }
}
