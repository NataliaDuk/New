<?php
class Hr extends TagOne
{
    protected string $tagName="hr";

    public function hr()
    {
    return "<$this->tagName $this->align>";
    }
}