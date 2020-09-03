<?php

namespace App\Modules\MatrixModule;

use App\Modules\NumberToAlphaConverter;

class MatrixMultiplication
{
    public function calculate(array $m1, array $m2, NumberToAlphaConverter $numberToAlphaConverter = null): array
    {
        $r = count($m1);
        $c = count($m2[0]);
        $p = count($m2);

        $result = [];
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < $p; $k++) {
                    $result[$i][$j] += $m1[$i][$k] * $m2[$k][$j];

                    if ($numberToAlphaConverter && ($k + 1) === $p) {
                        $result[$i][$j] = $numberToAlphaConverter->parse($result[$i][$j]);
                    }
                }
            }
        }

        return $result;
    }
}
