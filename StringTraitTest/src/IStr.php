<?php

namespace App;

interface IStr
{
    public function stringLength(): int;
    public function countPunctuation(): int;
    public function countDigits(): int;
}