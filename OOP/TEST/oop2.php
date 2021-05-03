<?php
class Point
{
    protected $x;
    protected $y;

    function __construct($x, $y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function Show()
    {
        echo 'Vertex: ('.$this->x.'',''.$this->y.') <br/>';
    }
}
class Rectangle extends  Point
{
    protected  $width;
    protected  $height;
    public function __construct($x, $y, $w, $h)
    {
        parent::__construct($x, $y);
        $this->width=$w;
        $this->height=$h;
    }
}
$r=new Rectangle(100,100,200,150);
$r->Show();
var_dump($r);