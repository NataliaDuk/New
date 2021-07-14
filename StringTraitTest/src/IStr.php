<?php

namespace App;

interface IStr
{
    /** метод, который вычисляет количество символов в строке
     * @return int
     */
    public function stringLength(): int;

    /**метод, который вычисляет количество знаков препинания (, .) в строке
     * @return int
     */
    public function countPunctuation(): int;

    /**метод, который вычисляет количество цифр в строке
     * @return int
     */
    public function countDigits(): int;

    /**метод, который преобразует строку в нижний регистр
     * @return string
     */
    public function strLower(): string;

    /**метод, который преобразует строку в верхний регистр
     * @return string
     */
    public function strUpper(): string;
}