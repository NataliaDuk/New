<?php

class Img extends AbstractTag
{
    protected string $src;
    protected string $alt;

    /**
     * @param string $src
     * @return Img
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }
    /**
     * @param string $alt
     * @return Img
     */
    public function setAlt(string $alt): static
    {
        $this->alt = $alt;
        return $this;
    }
    public function html(): string
    {
        return "<img src='$this->src' style='$this->style' alt='$this->alt'>";
    }


}