<?php

namespace src;

class Task3
{
    public function main(int $number): int
    {
        if ($number <= 1) {
            throw new \InvalidArgumentException('function accepts numbers > 1 only. Input was: ' . $number);
        }

        while (strlen($number) > 1) {
            $array = str_split($number);
            $number = array_sum($array);
        }

        return $number;
    }
}
