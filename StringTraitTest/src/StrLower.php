<?php

namespace App;

trait StrLower
{
    /**
     * @return string
     */
    public function strLower(): string
    {
    return mb_strtolower($this->str);
    }
}