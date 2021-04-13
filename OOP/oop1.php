<?php
//метод ==функция
//поле == переменная
declare(strict_types=1); //строгая проверка типов данных
//чертеж по которому создается объект (экземпляр какого-то класса)
class Person

{
    private int $age; //   private означает, что доступ к этому свойству возможен только из методов класса
    private string $name;

    //функция-конструктор, функция которая выполняется при создании экземпляра класса (объекта)
    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function intro(){
        return "Меня зовут $this->name, мне  $this->age лет.";
    }
}
//создается экземпляр класса (объект) Table (ключевое слово new)
$man = new Table(45, "Vasiliy");
//обращение к объекту и конкретному полю
//echo $man->age;
//echo $man->name;
echo $man->intro();
