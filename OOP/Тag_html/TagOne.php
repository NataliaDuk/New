<?php
abstract class TagOne
{
    protected string $innerText;
    protected string $type;
    protected string $tagName="";

    /**
     * @param string $innerTextA
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }
    /**
     * @param string $type
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }
    public function html(): string
    {
        return "$this->innerText<$this->tagName type='$this->type'>$this->innerText";
    }




}