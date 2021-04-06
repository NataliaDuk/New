<?php
class Calc
{
    public float $a;
    public float $b;


    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function Sum(): float
    {
        return $this->a+$this->b;
    }
    public function Diff(): float
    {
        return $this->a-$this->b;
    }
    public function Mult(): float
    {
        return $this->a*$this->b;
    }
    public function Div(): float
    {
        return $this->a/$this->b;
    }
}


$calc = new Calc(10, 5);


echo $calc->Sum()."<br>";
echo $calc->Diff()."<br>";
echo $calc->Mult()."<br>";
echo $calc->Div();
