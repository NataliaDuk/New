<?php
abstract class TagOne
{
    protected string $innerTextA;
    protected string $innerTextB;

    protected string $type;
    protected string $tagName="";

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
        return "$this->innerTextA<$this->tagName type='$this->type'>$this->innerTextB";
    }




}