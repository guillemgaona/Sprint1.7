<?php
use PHPUnit\Framework\TestCase;
require_once './src/class.php';

class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $evenNumber = new NumberChecker(4);
        $this->assertTrue($evenNumber->isEven(), '4 parell?');

        $oddNumber = new NumberChecker(3);
        $this->assertFalse($oddNumber->isEven(), '3 senar?');
    }

    public function testIsPositive()
    {
        $positiveNumber = new NumberChecker(5);
        $this->assertTrue($positiveNumber->isPositive(), '5 positiu?');

        $negativeNumber = new NumberChecker(-5);
        $this->assertFalse($negativeNumber->isPositive(), '-5 negatiu?');

        $zeroNumber = new NumberChecker(0);
        $this->assertFalse($zeroNumber->isPositive(), '0 no hauria de ser positiu');
    }
}
?>
