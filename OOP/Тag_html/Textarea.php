<?php

class Textarea
{
    protected string $innerText;
    protected float $cols = 40;
    protected float $rows = 5;

    /**
     * @param string $innerText
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<textarea cols='$this->cols' rows='$this->rows'>$this->innerText </textarea>";
    }

}