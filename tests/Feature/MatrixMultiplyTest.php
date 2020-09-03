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
        $response = $this->postJson('matrix/multiplication', [
            'matrix1' => $matrix1,
            'matrix2' => $matrix2,
        ]);

        $response->assertStatus(200)
            ->assertJson(['total' => $result]);
    }

    /** @test */
    public function it_returns_error_for_missing_input()
    {
        $response = $this->postJson('matrix/multiplication', []);
        $response->assertStatus(422);
    }

    /** @test */
    public function it_returns_error_for_input_is_not_array()
    {
        $response = $this->postJson('matrix/multiplication', [
            'matrix1' => '',
            'matrix2' => '',
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function it_returns_error_for_input_is_empty_array()
    {
        $response = $this->postJson('matrix/multiplication', [
            'matrix1' => [],
            'matrix2' => [],
        ]);

        $response->assertStatus(422);
    }

    /** @test */
    public function it_returns_error_for_input_is_not_numeric_array()
    {
        $matrix1 = [
            [1, 2, 3],
            [4, 's', 6]
        ];

        $matrix2 = [
            ['a', 8],
            [9, 'b'],
            [11, 12],
        ];

        $response = $this->postJson('matrix/multiplication', [
            'matrix1' => $matrix1,
            'matrix2' => $matrix2,
        ]);

        $response->assertStatus(422);
    }

    /** @test */
    public function it_returns_when_column_count_in_first_matrix_is_not_equal_to_row_in_second()
    {
        $matrix1 = [
            [1, 2, 3],
            [4, 5, 6],
            [4, 5, 6],
        ];

        $matrix2 = [
            [7, 8],
            [9, 10],
            [11, 12],
        ];

        $response = $this->postJson('matrix/multiplication', [
            'matrix1' => $matrix1,
            'matrix2' => $matrix2,
        ]);

        $response->assertStatus(422);
    }
}
