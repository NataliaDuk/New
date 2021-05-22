<?php

namespace Web;



class CalcMulti extends CalcS
{

    public function mult(): float
    {
        return $this->a * $this->b;
    }
}