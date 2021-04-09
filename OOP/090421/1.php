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

    public function sum()
    {
        return $this->a + $this->b;

    }

    public function diff()
    {
        return $this->a - $this->b;

    }
}
class CalcBig extends Calc
{
    public function mult()
    {
        return $this->a * $this->b;
    }

    public function div()
    {
        return $this->a / $this->b;
    }
}
$calc = new Calc(3, 4);
$calcbig = new CalcBig(2, 5);

echo $calc->sum() . "<br>";
echo $calcbig->diff();
