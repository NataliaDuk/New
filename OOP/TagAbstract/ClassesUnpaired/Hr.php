<?php

class Hr extends AbstractTag
{
    public function html(): string
    {
        return "<hr style='$this->style'>";
    }
}