<?php
class Student extends Table
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