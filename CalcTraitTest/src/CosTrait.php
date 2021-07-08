<?php


namespace App;


trait CosTrait
{
    public function cos(): float
    {
        return cos($this->a);
    }

}