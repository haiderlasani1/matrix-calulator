<?php

namespace Tests\Feature;

use Tests\TestCase;

class MatrixMultiplyTest extends TestCase
{
    /** @test */
    public function it_returns_results_for_result_2_by_2_matrices()
    {
        $matrix1 = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        $matrix2 = [
            [7, 8],
            [9, 10],
            [11, 12],
        ];

        $result = [
            ['BF', 'BL'],
            ['EI', 'EX']
        ];
        $response = $this->post('matrix/multiplication', [
            'matrix_1' => $matrix1,
            'matrix_2' => $matrix2,
        ]);

        $response->assertStatus(200)
            ->assertJson(['total' => $result]);
    }
}
