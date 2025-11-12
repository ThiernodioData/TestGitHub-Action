<?php

namespace Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testAddNegativeNumbers(): void
    {
        $result = $this->calculator->add(-5, -3);
        $this->assertEquals(-8, $result);
    }

    public function testSubtract(): void
    {
        $result = $this->calculator->subtract(10, 4);
        $this->assertEquals(6, $result);
    }

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(6, 7);
        $this->assertEquals(42, $result);
    }

    public function testDivide(): void
    {
        $result = $this->calculator->divide(20, 4);
        $this->assertEquals(5, $result);
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Division par zéro impossible');
        $this->calculator->divide(10, 0);
    }
}