<?php

namespace App;

abstract class Str implements IStr
{
    protected string $str;

    /**
     * @param string $str
     * @return $this
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    /**
     * @return int
     */
    public function stringLength(): int
    {
        return strlen($this->str);
    }

}