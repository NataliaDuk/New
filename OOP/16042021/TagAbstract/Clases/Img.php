<?php

class Img extends TagAbstract
{
    protected string $src;
    protected string $alt="";

    /**
     * @param string $src
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt): static
    {
        $this->alt = $alt;
        return $this;
    }

    public function html(): string
    {
        return "<img src='$this->src' alt='$this->alt' style='$this->style'>";
    }
}