<?php


abstract class AbstractTag
{
    protected string $style="";

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }
    abstract public function html(): string;

}