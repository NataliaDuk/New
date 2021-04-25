<?php

abstract class TagAbstract {
    protected string $style="";

    /**
     * @param string $style
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }
    abstract public function html(): string;
}