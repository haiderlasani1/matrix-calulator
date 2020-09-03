<?php

namespace App\Http\Requests;

use App\Rules\EqualRowsToColumns;
use App\Rules\NumericArray;
use Illuminate\Foundation\Http\FormRequest;

class MatricesMultiplicationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'matrix1' => ['required', 'array', new NumericArray()],
            'matrix2' => ['required', 'array', new NumericArray(), new EqualRowsToColumns('matrix1')],
        ];
    }
}
