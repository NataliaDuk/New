<?php


class Calculator
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     * @return Calculator
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     * @return Calculator
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

}}