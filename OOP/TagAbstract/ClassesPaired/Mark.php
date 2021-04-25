<?php

class Mark extends TagPaired
{
    public function html(): string
    {
        return "<mark style='$this->style'>$this->innerText</mark>";
    }
}