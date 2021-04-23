<?php
class Br extends TagOne
{
    protected string $tagName="br";
    protected string $innerNextA;
    protected string $innerTextB;

    public function br()
    {
    return "$this->innerTextA<$this->html()>$this->innerTextB";
    }
}