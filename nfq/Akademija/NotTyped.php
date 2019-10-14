<?php

namespace NFQ\Akademija;

class NotTyped
{
    public function calculateHomeWorkSum(...$numbers): int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
}