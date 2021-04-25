<?php

abstract class TagPaired extends TagAbstract
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
