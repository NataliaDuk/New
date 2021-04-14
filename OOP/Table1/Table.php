<?php

abstract class Table
{
    protected int $a;
    protected int $b;
    protected int $c;


    public function __construct($a, $b, $c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;

    }
    /**
     * @param string $heigt
     */
    public function setASm(float $a): void
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }
    public function setADm(float $a): void
    {
        if ($a > 0) {
            $this->a = $a*0.1;
        }
    }
    public function setAM(float $a): void
    {
        if ($a > 0) {
            $this->a= $a*0.01;
        }
    }
    public function setAInc(float $a): void
    {
        if ($a > 0) {
            $this->a = $a*0.3937007874;
        }
    }
    /**
     * @param int $b
     */
    public function setBSm(float $b): void
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }
    public function setSBDm(float $b): void
    {
        if ($b > 0) {
            $this->b = $b*0.1;
        }
    }
    public function setBM(float $b): void
    {
        if ($square > 0) {
            $this->b = $b*0.01;
        }
    }
    public function setBInc(float $b): void
    {
        if ($b > 0) {
            $this->b = $b*0.3937007874;
        }
    }
    /**
     * @param int $c
     */
    public function setCSm(float $c): void
    {
        if ($c > 0) {
            $this->c = $c;
        }
    }
    public function setCDm(float $c): void
    {
        if ($c > 0) {
            $this->c = $c*0.1;
        }
    }
    public function setCM(float $c): void
    {
        if ($c > 0) {
            $this->c= $c*0.01;
        }
    }
    public function setCInc(float $c): void
    {
        if ($c > 0) {
            $this->c=$c*0.3937007874;
        }
    }
    public function cost($square, $heigt)
    {
        return $this->square*1+$this->heigt*4*1+20;
        }
    abstract public function costD(): float;

}