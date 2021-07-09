<?php


namespace App;


trait SqrTrait
{
    public function sqrRoot(): float
    {
        return sqrt($this->a);
    }

}