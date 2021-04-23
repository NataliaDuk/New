<?php

class Img extends TagOne
{
    protected string $tagName="img";

    public function img()
    {
    return "<$this->tagName $this->src $this->class>";
    }
}