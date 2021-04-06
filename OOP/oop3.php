<?php
class Kvadrat
{
    public float $x1;
    public float $y1;
    public float $x2;
    public float $y2;
    public float $x3;
    public float $y4;


    public function __construct($x1, $y1, $x2, $y2, $x3, $y3,$x4, $y4)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
        $this->x3 = $x3;
        $this->x4 = $x4;
        $this->y3 = $y3;
        $this->y4 = $y4;

    }


}

$kv = new Kvadrat(2, 2, 2,20,20,20, 20,2);

echo $kv->x1;
echo $kv->y1;
echo $kv->x2;
echo $kv->y2;
echo $kv->x3;
echo $kv->y3;
echo $kv->x4;
echo $kv->y4;


