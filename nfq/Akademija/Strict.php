<?php

declare(strict_types=1);

namespace NFQ\Akademija;

class Strict
{
    public function calculateHomeWorkSum(int ...$numbers) :int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
}