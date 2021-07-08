<?php

use PHPUnit\Framework\TestCase;
use App\Calc;


class CalcTest extends TestCase
{
    public function testSum()
    {
    $calc= new Calc();
    $this->assertEquals(4, $calc->setA(2)->setB(2)->sum());
    }
}