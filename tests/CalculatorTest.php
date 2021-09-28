<?php
class CalculatorTest extends \PHPUnit\Framework\TestCase{

    public function testAdd(){
        $calculator = new App\Calculator();
        $result = $calculator->add(10, 2);

        $this->assertEquals($result, 12);
    }

    public function testSubtract(){
        $calculator = new App\Calculator();
        $result = $calculator->subtract(10, 2);

        $this->assertEquals($result, 8);
    }

    public function testMultiply(){
        $calculator = new App\Calculator();
        $result = $calculator->multiply(10, 2);

        $this->assertEquals($result, 20);
    }

    public function testDivide(){
        $calculator = new App\Calculator();
        $result = $calculator->divide(10, 2);

        $this->assertEquals($result, 5);
    }

}