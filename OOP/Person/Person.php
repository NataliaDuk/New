<?php

abstract class Person
{
    protected string $name;
    protected int $age;

    public function __construct($name, $age)
    {
        $this->setAge($age);
        $this->setName($name);
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) > 3) {
            $this->name = $name;
        }
    }

    abstract public function say(): string;

    abstract public function doJob(): string;

}