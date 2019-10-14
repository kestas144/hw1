<?php

namespace NFQ\Akademija;

class Soft
{
    public function calculateHomeWorkSum(int ...$numbers): int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
}