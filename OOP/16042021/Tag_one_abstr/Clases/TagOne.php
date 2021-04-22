<?php


abstract class TagOne
{
    protected string $innerTextA;
    protected string $innerTextB;
    protected string $class="";
    protected string $src="";
    protected string $align="";

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
     * @param string $class
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @param string $src
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }

    /**
     * @param string $align
     */
    public function setAlign(string $align): static
    {
        $this->align = $align;
        return $this;
    }
    public function html()
    {

    }

}
