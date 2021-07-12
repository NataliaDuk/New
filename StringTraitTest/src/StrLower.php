<?php


namespace App;


trait StrLower
{
    public function strLower(): string
    {
    return mb_strtolower($this->str);
    }
}