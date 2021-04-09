<?php

class Person
{
    public string $name;
    public int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function say()
    {
        return "Меня зовут $this->name, мне $this->age лет";

    }
}

class Worker extends Person
{
    public function work()
    {
        return "Я умею ложить кирпичи";
    }
}

class Student extends Person
{
    public function work()
    {
        return "Я умею учиться";
    }
}

$man = new Worker("Ivan", 45);
$boy = new Student("Rustam", 25);

//echo $man->say() . "<br>";
//echo $boy->say();

echo $man->work(). "<br>";
echo $boy->work();
