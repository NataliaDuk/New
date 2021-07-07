<?php


namespace App;


trait DivTrait
{
    public function div(): float
    {
        return $this->a / $this->b;
    }
}