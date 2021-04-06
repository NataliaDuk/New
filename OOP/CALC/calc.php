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
     * @var float
     */
    public float $b;


    /**
     * Calc constructor. инициализирует переменные a и b
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /** функция для сложения чисел
     * @return float
     */
    public function sum(): float
    {
        return $this->a + $this->b;
    }

    /**функция для разности чисел
     * @return float
     */
    public function diff(): float
    {
        return $this->a - $this->b;
    }

    /**функция для деления чисел
     * @return float
     */

    public function multi(): float
    {
        return $this->a * $this->b;
    }

    /**функция для умножения чисел
     * @return float
     */
    public function div(): float
    {
        return $this->a / $this->b;
    }
}


