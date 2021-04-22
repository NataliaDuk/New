<?php

class Br 
{
    protected string $innerTextA;
    protected string $innerTextB;
    protected string $style="";


    /**
     * @param string $innerTextA
     */
    public function setInnerTextA(string $innerTextA): static
    {
        $this->innerTextA = $innerTextA;
        return $this;
    }
/**
     * @param string $innerTextB
     */
    public function setInnerTextB(string $innerTextB): static
    {
        $this->innerTextB = $innerTextB;
        return $this;
    }
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }
    public function html(): string
    {
        return "$this->innerTextA<br style='$this->style'>$this->innerTextB";
    }
}