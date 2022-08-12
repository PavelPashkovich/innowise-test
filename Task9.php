<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        if (count($arr) < 3) {
            throw new \InvalidArgumentException('first function argument should consist of min 3 numbers');
        }
        foreach ($arr as $elem) {
            if (($elem !== (int) $elem) || $elem < 0) {
                throw new \InvalidArgumentException('first function argument should be an array of numbers >= 0');
            }
        }
        if ($number <= 0) {
            throw new \InvalidArgumentException('second function argument should be an integer > 0');
        }

        $result = [];
        for ($i = 0; $i <= count($arr) - 3; $i++) {
            $newArr = [$arr[$i], $arr[$i + 1], $arr[$i + 2]];
            if (array_sum($newArr) === $number) {
                $result[] = $arr[$i] . ' + ' . $arr[$i + 1] . ' + ' . $arr[$i + 2] . ' = ' . $number;
            }
        }

        return $result;
    }
}
