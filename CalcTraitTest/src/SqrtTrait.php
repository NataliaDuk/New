<?php


namespace App;


trait SqrTrait
{
    public function sqrt(): float
    {
        return sqrt($this->a);
    }

}