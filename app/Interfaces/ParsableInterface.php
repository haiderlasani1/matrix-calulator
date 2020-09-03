<?php

namespace App\Interfaces;

interface ParsableInterface
{
    public function parseToString(int $number): string;
}
