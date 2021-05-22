<?php

namespace Web;

class CalcDiff extends CalcMulti
{
    public function diff(): float
    {
        return $this->a / $this->b;
    }
}