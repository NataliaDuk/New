<?php
//метод ==функция
//поле == переменная
declare(strict_types=1); //строгая проверка типов данных
//чертеж по которому создается объект (экземпляр какого-то класса)
class Line
{
    public float $x1; //   private означает, что доступ к этому свойству возможен только из методов класса
    public float $x2;
    public float $y1;
    public float $y2;
    //функция-конструктор, функция которая выполняется при создании экземпляра класса (объекта)
    public function __construct($x1, $x2, $y1, $y2)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }


}
//создается экземпляр класса (объект) TableCost (ключевое слово new)
$man = new Line(2, 20, 2, 2);
//обращение к объекту и конкретному полю
//echo $man->age;
//echo $man->name;
echo $man->x1;
echo $man->x2;
echo $man->y1;
echo $man->y2;

