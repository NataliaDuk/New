<?php

use PHPUnit\Framework\TestCase;
use App\NewCalc;

class NewCalcTest extends TestCase
{
    public function testNewCalc()
    {
        $newCalc = new NewCalc();
        $this->assertEquals(3, $newCalc->setA(1)->setB(2)->sum());
        $this->assertEquals(4.5, $newCalc->setA(9)->setB(2)->div());
        $this->assertEquals(18, $newCalc->setA(9)->setB(2)->mult());
        $this->assertEquals(7, $newCalc->setA(9)->setB(2)->diff());
    }


}