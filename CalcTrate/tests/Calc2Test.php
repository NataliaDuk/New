<?php
use PHPUnit\Framework\TestCase;
use App\Calc2;

class Calc2Test extends TestCase
use App\Calc2;

{
    public
    function testNewCalc()
    {
        $calc2 = new Calc2();
        $this->assertEquals(3, $calc2->setA(1)->setB(2)->sum());


    }

}
