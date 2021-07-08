<?php


use PHPUnit\Framework\TestCase;
use App\CalcOp;

class NewCalcOpTest extends TestCase
{
    public function testSin()
    {
        $calcOp= new CalcOp();
        $this->assertEquals(-0.54402111088937, $calcOp->setA(10)->sin());
        $this->assertEquals(-0.83907152907645, $calcOp->setA(10)->cos());
        $this->assertEquals(10, $calcOp->setA(-10)->abs());
        $this->assertEquals(4, $calcOp->setA(2)->sqr());
        $this->assertEquals(4, $calcOp->setA(16)->sqrt());
    }
}