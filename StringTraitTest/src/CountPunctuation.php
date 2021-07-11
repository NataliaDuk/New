<?php


namespace App;


trait CountPunctuation
{
    /**
     * @return int
     */
    public function countPunctuation(): int
    {
    return preg_match_all("/\,|./", $this->str);
    }
}