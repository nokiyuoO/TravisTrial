<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
	$calc = new Calc();
	$this->assertEquals($calc->add(1,2),3);
    }

    public function testSub()
    {
        $calc = new Calc();
        $this->assertEquals($calc->sub(3,2),1);
    }

    public function testKakezan()
    {
        $calc = new Calc();
        $this->assertEquals($calc->kakezan(4,4),16);
    }

    public function testWarizan()
    {
        $calc = new Calc();
        $this->assertEquals($calc->warizan(4,4),1);
    }

    public function testZero()
    {
        $calc = new Calc();
        $this->assertEquals($calc->zero(4,0),1);
    }
}
?>
