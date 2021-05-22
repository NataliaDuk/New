<?php
namespace Web;


abstract class CalcS
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
       $this->setA($a);
      $this->setB($b);
    }

    /**
     * @param float $a
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }
  public function sum(): float
    {
        return $this->a + $this->b;
    }


}