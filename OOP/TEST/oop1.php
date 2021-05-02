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
        echo 'Vertex: (' . $this->x . ',' . $this->y . ')    <br/>';
    }
}

$p = new Point();
$p->x = 100;
$p->y = 200;
$p->Show();
