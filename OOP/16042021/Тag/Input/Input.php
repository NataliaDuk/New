<?php

class Input
{
    protected string $type;
    protected string $placeholder = "";
    protected string $class = "";

    /**
     * @param string $type
     * @return Input
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $placeholder
     * @return Input
     */
    public function setPlaceholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @param string $class
     * @return Input
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }
    public function html(): string
    {
        return "<input class='$this->class' type='$this->type' placeholder='$this->placeholder'>";
    }
}