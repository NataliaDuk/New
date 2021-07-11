<?php


namespace App;


trait CountDigits
{
    public function countDigits(): int
    {
    return preg_match_all("/[0-9]/", $this->str);
    }
}