<?php


abstract class AbstractCalc
{
    protected float $a;
    protected float $b;

    public function __construct(float $a, float $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return $this
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    abstract public function sum(): float;

    abstract public function mult(): float;
}