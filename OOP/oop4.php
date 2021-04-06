<?php
class Square
{
    public float $side;



    public function __construct($side)
    {
        if ($side>0) {
            $this->side = $side;
        } else {
            $this->side = 0;
        }
    }
}

$square = new Square (1);

echo $square->side;

