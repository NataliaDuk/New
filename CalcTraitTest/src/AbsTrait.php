<?php


namespace App;


trait AbsTrait
{
    public function abs(): float
    {
        return abs($this->a);
    }

}