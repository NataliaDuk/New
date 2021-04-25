<?php

class Button extends TagPaired
{
    protected string $type="";

    /**
     * @param string $type
     * @return Button
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        return "<button type='$this->type' style='$this->style'>$this->innerText</button>";
    }


}