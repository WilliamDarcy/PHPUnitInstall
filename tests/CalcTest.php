<?php
declare(strict_types=1);
require __DIR__ . "/../src/Calc.php";

use PHPUnit\Framework\TestCase;

final class CalcTest extends TestCase
{
    public function testAuCarre5() 
    {
        $calc = new Calc(5);
        $this->assertEquals($calc->AuCarre(),25);
    }

    public function testAuCarre0() 
    {
        $calc = new Calc(0);
        $this->assertEquals($calc->AuCarre(),0);
    }

}
