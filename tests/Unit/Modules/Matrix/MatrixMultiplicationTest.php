<?php

namespace Tests\Unit\Modules\Matrix;

use PHPUnit\Framework\TestCase;
use App\Modules\NumberToAlphaConverter;
use App\Modules\MatrixModule\MatrixMultiplication;

class MatrixMultiplicationTest extends TestCase
{
    /** @test */
    public function it_multiple_2_by_2_matrices()
    {
        $a = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        $b = [
            [7, 8],
            [9, 10],
            [11, 12],
        ];

        $result = [
            [58, 64],
            [139, 154]
        ];

        $calculator = new MatrixMultiplication();
        $this->assertEquals($result, $calculator->calculate($a, $b));
    }

    /** @test */
    public function it_multiple_2_by_2_matrices_to_alpha()
    {
        $a = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        $b = [
            [7, 8],
            [9, 10],
            [11, 12],
        ];

        $result = [
            ['BF', 'BL'],
            ['EI', 'EX']
        ];

        $calculator = new MatrixMultiplication();
        $this->assertEquals($result, $calculator->calculate($a, $b, new NumberToAlphaConverter()));
    }

    /** @test */
    public function it_multiple_3_by_3_matrices()
    {
        $a = [
            [3, 3, 3],
            [4, 2, 1],
            [5, 6, 7],
        ];

        $b = [
            [3, 3, 3],
            [4, 2, 1],
            [5, 6, 7],
        ];

        $result = [
            [36, 33, 33],
            [25, 22, 21],
            [74, 69, 70],
        ];

        $calculator = new MatrixMultiplication();
        $this->assertEquals($result, $calculator->calculate($a, $b));
    }

    /** @test */
    public function it_multiple_3_by_3_matrices_to_alpha()
    {
        $a = [
            [3, 3, 3],
            [4, 2, 1],
            [5, 6, 7],
        ];

        $b = [
            [3, 3, 3],
            [4, 2, 1],
            [5, 6, 7],
        ];

        $result = [
            [36, 33, 33],
            [25, 22, 21],
            [74, 69, 70],
        ];

        $calculator = new MatrixMultiplication();
        $this->assertEquals($result, $calculator->calculate($a, $b));
    }
}
