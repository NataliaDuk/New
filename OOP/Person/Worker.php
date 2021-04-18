<?php
class Worker extends TableCost
{
    public function say(): string
    {
        return "Я рабочий, меня зовут $this->name";
    }

    public function doJob(): string
    {
        return "Я умею копать";
    }
}