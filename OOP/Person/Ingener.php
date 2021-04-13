<?php


class Ingener extends Table
{
    public function say(): string
    {
        return "Я инженер, меня зовут $this->name";
    }

    public function doJob(): string
    {
        return "Я умею проектировать";
    }
}