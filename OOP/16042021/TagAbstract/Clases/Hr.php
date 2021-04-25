<?php

class Hr extends TagAbstract
{
    public function html(): string
    {
    return "<hr  style='$this->style'>";
    }
}