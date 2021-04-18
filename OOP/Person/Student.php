<?php
class Student extends TableCost
{
    public function say(): string
    {
        return "Я студент, меня зовут $this->name";
    }

    public function doJob(): string
    {
        return "Я умею учиться";
    }
}