<?php

namespace App;

class Str //implements IStr
{
    protected string $str;

    /**
     * @param string $str
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    public function stringLength(): int
    {
        return strlen($this->str);
    }

}