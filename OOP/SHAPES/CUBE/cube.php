<?php

class Cube
{
    public float $l;


    public function __construct($l)
    {
        $this->l=$l;
    }
    public function squareCube()
    {
        return $this->l**2*6;
    }
    public function perimCube()
    {
        return $this->l*12;
    }
}
