<?php
class Legs extends Table
{
    public function costD(): float
    {
        return $this->c*4*1;
    }

    public function doJob(): string
    {
        return "Я умею копать";
    }
}