<?php

namespace App;

trait CountDigits
{
    /**
     * @return int
     */
    public function countDigits(): int
    {
    return preg_match_all("/[0-9]/", $this->str);
    }
}