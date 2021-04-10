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
        return pi()*$this->r**2;
    }
    public function perimCircle()
    {
        return 2*pi()*$this->r;
    }
}
