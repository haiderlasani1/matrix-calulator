<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EqualRowsToColumns implements Rule
{
    private $field;

    public function __construct($field)
    {
        $this->field = $field;
    }

    public function passes($attribute, $value)
    {
        $field1Columns = count(request()->get($this->field));
        $field1Rows = count($value[0]);

        return $field1Columns === $field1Rows;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute rows should match columns";
    }
}
