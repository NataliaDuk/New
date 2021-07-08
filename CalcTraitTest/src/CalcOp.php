<?php

namespace App;

class CalcOp
{
    protected float $a;

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }
    public function sin(): float
    {
        return sin($this->a);
    }
}