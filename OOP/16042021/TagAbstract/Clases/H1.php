<?php

class H1 extends TagPaired
{
    public function html(): string
    {
        return "<h1 style='$this->style'>$this->innerText</h1>";
    }
}