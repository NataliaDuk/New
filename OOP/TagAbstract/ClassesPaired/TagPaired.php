<?php


abstract class TagPaired extends AbstractTag
{
    protected string $innerText="";

    /**
     * @param string $innerText
     * @return TagPaired
     */

    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

}