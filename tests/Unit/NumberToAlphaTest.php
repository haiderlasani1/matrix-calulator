<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Modules\NumberToAlphaConverter;

class NumberToAlphaTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param $number
     * @param $alpha
     */
    public function it_coverts_numbers_to_alpha($number, $alpha)
    {
        $converter = new NumberToAlphaConverter();
        $this->assertEquals($alpha, $converter->parseToString($number));
    }

    public function dataProvider()
    {
        return [
            [1, 'A'],
            [2, 'B'],
            [25, 'Y'],
            [26, 'Z'],
            [27, 'AA'],
            [28, 'AB'],
            [52, 'AZ'],
            [801, 'ADU'],
            [58, 'BF'],
            [64, 'BL'],
            [139, 'EI'],
            [154, 'EX'],
        ];
    }
}
