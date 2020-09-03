<?php

namespace App\Modules;
;

class NumberToAlphaConverter
{
    public function parse(int $number): string
    {
        $totalAlphaCharacters = 26;
        $alphaCharacter = '';

        while ($number != 0) {
            $remaining = ($number - 1) % $totalAlphaCharacters;
            $number = floor(($number - $remaining) / $totalAlphaCharacters);
            $alphaCharacter = chr(65 + $remaining) . $alphaCharacter;
        }

        return $alphaCharacter;
    }
}
