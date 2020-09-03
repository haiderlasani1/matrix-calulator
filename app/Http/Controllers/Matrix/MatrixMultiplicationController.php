<?php

namespace App\Http\Controllers\Matrix;

use App\Http\Controllers\Controller;
use App\Modules\NumberToAlphaConverter;
use App\Modules\MatrixModule\MatrixMultiplication;
use App\Http\Requests\MatricesMultiplicationRequest;

class MatrixMultiplicationController extends Controller
{
    public function index(MatricesMultiplicationRequest $request)
    {
        $matrix1 = $request->matrix1;
        $matrix2 = $request->matrix2;

        $alphaParser = new NumberToAlphaConverter();

        $result = (new MatrixMultiplication())
            ->calculate($matrix1, $matrix2, $alphaParser);

        return ['total' => $result];
    }
}
