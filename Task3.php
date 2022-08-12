<?php

namespace src;

class Task3
{
    public function main($number): int
    {
        if (gettype($number) !== 'integer') {
            throw new \InvalidArgumentException('function accepts integers only. Input was: ' . $number);
        }
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
