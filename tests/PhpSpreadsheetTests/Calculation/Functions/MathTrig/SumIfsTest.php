<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;
use PHPUnit\Framework\TestCase;

class SumIfsTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerSUMIFS
     *
     * @param mixed $expectedResult
     */
    public function testSUMIFS($expectedResult, ...$args)
    {
        $result = MathTrig::SUMIFS(...$args);
        $this->assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerSUMIFS()
    {
        return require 'data/Calculation/MathTrig/SUMIFS.php';
    }
}
