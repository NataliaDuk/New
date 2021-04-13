<?php

abstract class Table
{
    protected string $heigt;
    protected int $square;

    public function __construct($heigt, $square)
    {
        $this->heigt=$heigt;
        $this->square=$square;
    }
    /**
     * @param string $heigt
     */
    public function setHeigtSm(float $heigt): void
    {
        if ($heigt > 0) {
            $this->heigt = $heigt;
        }
    }
    public function setHeigtDm(float $heigt): void
    {
        if ($heigt > 0) {
            $this->heigt = $heigt*0.1;
        }
    }
    public function setHeigtM(float $heigt): void
    {
        if ($heigt > 0) {
            $this->heigt = $heigt*0.01;
        }
    }
    public function setHeigtInc(float $heigt): void
    {
        if ($heigt > 0) {
            $this->heigt = $heigt*0.3937007874;
        }
    }
    /**
     * @param int $square
     */
    public function setSquareSm(float $square): void
    {
        if ($square > 0) {
            $this->square = $square;
        }
    }
    public function setSquareDm(float $square): void
    {
        if ($square > 0) {
            $this->square = $square*0.1;
        }
    }
    public function setSquareM(float $square): void
    {
        if ($square > 0) {
            $this->square = $square*0.01;
        }
    }
    public function setSquareInc(float $square): void
    {
        if ($square > 0) {
            $this->square = $square*0.3937007874;
        }
    }
    public function rashodTopliva($rashod)
    {
        if (($this->bak - $rashod) < 0) {
            $this->bak = 0;
        } else {
            $this->bak -= $rashod;
        }
    abstract public function cost(): float;

}