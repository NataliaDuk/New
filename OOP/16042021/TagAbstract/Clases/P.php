<?php

class P extends TagPaired
{
    public function html(): string
    {
        return "<p style='$this->style'>$this->innerText</p>";
    }
}