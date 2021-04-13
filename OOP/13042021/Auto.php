<?php

abstract class Auto
{
    /** количество топлива в литрах
     * @var float
     */
    protected float $bak;

    public function __construct()
    {
        $this->bak = 0;
    }

    /** устанавливает объем топлива в литрах
     * @param float $bak
     */
    public function setBakL(float $bak): void
    {
        $this->bak = $bak;
    }

    /** устанавливает объем топлива в галлонах
     * @param float $bak
     */
    public function setBakG(float $bak): void
    {
        $this->bak = $bak * 4.54609;
    }

    public function rashodTopliva($rashod)
    {
        if (($this->bak - $rashod) < 0) {
            $this->bak = 0;
        } else {
            $this->bak -= $rashod;
        }
    }

    abstract public function drive();


}