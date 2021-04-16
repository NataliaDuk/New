<?php
class Table 
{
    protected float $squareTop;
    protected float $heigtLeg;

public function __construct($squareTop, $heigtLeg) 
{
    $this->setSquareTop($squareTop);
    $this->setHeigtLeg($heigtLeg);
}
public function setSquareTop(float $squareTop): void 
{
if ($squareTop>0) {
    $this->squareTop=$squareTop;
}
}
public function setHeigtLeg(float $heigtLeg): void
{
if ($heigtLeg>0) {
    $this->heigtLeg=$heigtLeg;
}
}
public function costSm() 
{
    return ($this->$squareTop + $this->$heigtLeg + 20);
}

}