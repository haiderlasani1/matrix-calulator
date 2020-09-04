<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NumericArray implements Rule
{
    public function passes($attribute, $value)
    {
        foreach ($value as $val) {
            $chk = array_filter($val, [$this, 'checkForNumber']);
            if (count($chk)) {
                return false;
            }
        }
        return true;
    }

    public function checkForNumber($value)
    {
        if (!is_numeric($value)) {
            return $value;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute must only contain integers.";
    }
}
