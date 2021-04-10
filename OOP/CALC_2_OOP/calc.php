<?php

/** класс калькулятор
 * Class Calc
 */
class Calc
{
    /**
     * @var float переменная для вычислений калькулятора
     */
    public float $a;

    /**
     * Calc constructor. инициализирует переменную a
     * @param $a
     */
    public function __construct($a)
    {
        $this->a = $a;

    }

    /** функция для вычисления корня квадратного
     * @return float
     */
    public function sqrt(): float
    {
        return sqrt($this->a);
    }

    /**функция для вычисления синуса
     * @return float
     */
    public function sin(): float
    {
        return sin($this->a);
    }

    /**функция для вычисления модуля числа
     * @return float
     */

    public function abs(): float
    {
        return abs($this->a);
    }
}


