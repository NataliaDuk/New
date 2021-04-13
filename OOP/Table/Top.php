<?php
class Top extends Table
{
    public function cost(): float
    {
        return $this->square*1;
    }

    public function doJob(): string
    {
        return "Я умею учиться";
    }
}