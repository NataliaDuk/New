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
        return 6*$this->l**2;
    }
    public function perimCube()
    {
        return 12*$this->l;
    }
}
