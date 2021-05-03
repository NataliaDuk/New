<?php

class Point
{
    protected $x;
    protected $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function Show()
    {
        echo 'Vertex: (' . $this->x . ', ' . $this->y . ') width:' . $this->width . 'height:' . $this->height . '<br/>';
    }
}
class Rectangle extends Point
{
    protected $width;
    protected $height;
    function __construct($x, $y, $w, $h)
    {
        parent::__construct($x, $y);
        $this->width=$w;
        $this->height=$h;
    }
    function Show()
    {
        echo 'Vertex: ('.$this->x.','.$this->y.') 
 width:'.
            $this->width.' height:'.$this->height.'<br/>';
}
}
class Circle extends Point
{
    protected $radius;

    function __construct($x, $y, $r)
    {
        parent::__construct($x, $y);
        $this->redius = $r;
    }

    function Show()
    {

        echo 'Vertex: (' . $this->x . ',' . $this->y . ') 
 radius:' .
            $this->radius . '<br/>';
    }

}

$r = new Rectangle(100, 100, 200, 150);
$r->Show();
$c=new Circle(200,200,100);
$c->Show();