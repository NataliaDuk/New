<?php
class Trapez
{
    /**
     * @var float
     */
    public float $a;
    /**
     * @var float
     */
    public float $b;
    public float $h;

    public function __construct($a, $b, $h)
    {
        $this->a=$a;
        $this->b=$b;
        $this->h=$h;
    }
    public function squareTrapez()
    {
        return ($this->a+$this->b)/2*$this->h;
    }
    public function perimTrapez()
    {
        return ($this->a+$this->b+sqrt($this->h**2+(($this->a-$this->b)/2))**2);
    }
}
