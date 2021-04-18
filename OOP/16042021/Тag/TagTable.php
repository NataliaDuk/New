<?php

abstract class TagTable
{
    protected array $data;
    protected string $tagName="";
    protected int $border=1;
    protected float $width=150;

    /**
     * @param array $data
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function html(): string
    {
        $html = "";
        foreach ($this->data as $value) {
            $html .= "<$this->tagName width='$this->width'>$value</$this->tagName >";
        }

        return "<table border='$this->border'\n<tr>\n$html </tr></table>";
    }
}