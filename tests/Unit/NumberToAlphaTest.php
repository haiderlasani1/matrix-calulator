<?php

namespace Tests\Unit;

use App\Modules\NumberToAlphaConverter;
use PHPUnit\Framework\TestCase;

class NumberToAlphaTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_coverts_numbers_to_alpha($number, $alpha)
    {
        $converter = new NumberToAlphaConverter();
        $result = $converter->parse($number);
        $this->assertEquals($alpha, $result);
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
            [800, 'ADT'],
//            [27, 'AA'],
//            [52, 'AZ'],
//            [53, 'BA'],
//            [27, 'AA'],
        ];
    }
}
