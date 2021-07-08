<?php


namespace App;


trait DiffTrait
{
    public function diff(): float
    {
        return $this->a - $this->b;
    }
}