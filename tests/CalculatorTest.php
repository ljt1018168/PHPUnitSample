<?php
namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * CalcTest
 * @group group
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function test_Add()
    {
        // arrage
        $calc = new Calculator();
        $a = 1;
        $b = 2;
        $expected = 3;
        // act
        $actual = $calc->add($a, $b);
        // assert
        $this->assertEquals($expected, $actual);

    }

}
