<?php

namespace App;

trait StrUpper
{
    /**
     * @return string
     */
    public function strUpper(): string
    {
    return mb_strtoupper($this->str);
    }
}