<?php


namespace App;


trait MultTrait
{
public function mult(): float
{
    return $this->a * $this->b;
}
}