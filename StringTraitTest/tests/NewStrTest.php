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
        $this->assertIsInt($this->str->setStr("Hello")->stringLength());
        $this->assertEquals(5, $this->str->setStr("Hello")->stringLength());
        $this->assertEquals(9, $this->str->setStr("Hello !!!")->stringLength());
    }
    public function testCountDigits()
    {
        $this->assertIsInt($this->str->setStr("Hello123")->countDigits());
        $this->assertEquals(3, $this->str->setStr("Hello123")->countDigits());
        $this->assertEquals(5, $this->str->setStr("21235")->countDigits());
    }
    public function testCountPunctuation()
    {
        $this->assertIsInt($this->str->setStr("Hello,1,2,3")->countPunctuation());
        $this->assertEquals(3, $this->str->setStr("Hello,1,2,3")->countPunctuation());
        $this->assertEquals(4, $this->str->setStr("Hello,1,2,3.")->countPunctuation());
    }
    public function testStrLower()
    {
        $this->assertIsString($this->str->setStr("Hello")->strLower());
        $this->assertEquals("hello", $this->str->setStr("Hello")->strLower());
        $this->assertEquals("hello vasya", $this->str->setStr("Hello Vasya")->strLower());
    }
    public function testStrUpper()
    {
        $this->assertIsString($this->str->setStr("Hello")->strUpper());
        $this->assertEquals("HELLO", $this->str->setStr("Hello")->strUpper());
        $this->assertEquals("HELLO VASYA", $this->str->setStr("Hello Vasya")->strUpper());
    }
}