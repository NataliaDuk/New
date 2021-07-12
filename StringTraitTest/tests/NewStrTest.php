<?php

use PHPUnit\Framework\TestCase;
use App\NewStr;

class NewStrTest extends TestCase
{
private  NewStr $str;
    public function setUp(): void
    {
        $this->str = new NewStr();
    }
    public function testStr()
    {
        $this->assertEquals(5, $this->str->setStr("Hello")->stringLength());
    }
    public function testCountDigits()
    {
        $this->assertEquals(3, $this->str->setStr("Hello123")->countDigits());
    }
    public function testCountPunctuation()
    {
        $this->assertEquals(3, $this->str->setStr("Hello,1,2,3")->countPunctuation());
    }
    public function testStrLower()
    {
        $this->assertEquals("hello", $this->str->setStr("Hello")->strLower);
    }
    public function testStrUpper()
    {
        $this->assertEquals("HELLO", $this->str->setStr("Hello")->strUpper);
    }
}