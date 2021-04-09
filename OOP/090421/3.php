<?php

class Rectangle
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function setA($a)
    {
       if ($a>0) {
           $this->a = $a;
       }

    }
    public function setB($b)
    {
        if ($b>0) {
            $this->b = $b;
        }

    }
    public function square()
    {
        return $this->a * $this->b;

    }
}

class RectanBig extends Rectangle
{
    public function perim()
    {
        return ($this->a + $this->b) * 2;
    }
}

//$sqrt = new Rectangle(3, 4);
$perimetr = new RectanBig (2, 4);


//echo $sqrt->square() . "<br>";
echo $perimetr->perim(). "<br>";

$perimetr->setA(3);
$perimetr->setB(3);

echo $perimetr->perim();