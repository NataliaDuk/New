<?php


use PHPUnit\Framework\TestCase;
use App\CalcOp;

class CalcOpTest extends TestCase
{
    public function testSin()
    {
        $calcOp= new CalcOp();
        $this->assertEquals(4, $calcOp->setA(2)->sin());
    }
}