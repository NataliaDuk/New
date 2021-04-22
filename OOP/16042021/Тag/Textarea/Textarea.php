<?php

class Textarea
{
    protected string $innerText;
    protected int|string $cols = "";
    protected int|string $rows = "";
    protected string $style="";

    /**
     * @param string $innerText
     * @return Textarea
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<textarea style='$this->style' cols='$this->cols' rows='$this->rows'>$this->innerText </textarea>";
    }

    /**
     * @param int|string $rows
     * @return Textarea
     */
    public function setRows(int|string $rows): static
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @param int|string $cols
     * @return Textarea
     */
    public function setCols(int|string $cols): static
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @param string $style
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

}