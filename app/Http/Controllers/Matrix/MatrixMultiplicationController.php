<?php

namespace App\Http\Controllers\Matrix;

use App\Http\Controllers\Controller;
use App\Modules\MatrixModule\MatrixMultiplication;
use App\Modules\NumberToAlphaConverter;
use Illuminate\Http\Request;

class MatrixMultiplicationController extends Controller
{
    public function index(Request $request)
    {
        $matrix1 = $request->matrix_1;
        $matrix2 = $request->matrix_2;

        $alphaParser = new NumberToAlphaConverter();

        $result = (new MatrixMultiplication())
            ->calculate($matrix1, $matrix2, $alphaParser);

        return ['total' => $result];
    }
}
