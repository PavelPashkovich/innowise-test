<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        foreach ($arr as $elem) {
            if ($elem !== (int) $elem) {
                throw new \InvalidArgumentException('first function argument should be an array of numbers only');
            }
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
