<?php

namespace NFQ;

class CalculateHomeWork
{
    public function calculateHomeWorkSum(...$numbers)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

}