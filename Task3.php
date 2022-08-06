<?php

namespace src;

class Task3
{
    public function main(int $number): int
    {
        while (strlen($number) > 1) {
            $array = str_split($number);
            $number = array_sum($array);
        }

        return $number;
    }
}
