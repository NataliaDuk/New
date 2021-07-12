<?php


namespace App;


trait StrUpper
{
    public function strUpper(): string
    {
    return mb_strupper($this->str);
    }
}