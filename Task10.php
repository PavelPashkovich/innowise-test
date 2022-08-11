<?php

namespace src;

class Task10
{
    public function main(int $n): array
    {
        if ($n < 1) {
            throw new \InvalidArgumentException('function accepts positive numbers only. Input was: ' . $n);
        }
        $result = [$n];
        while ($n > 1) {
            $n % 2 === 0 ? $n = $n / 2 : $n = $n * 3 + 1;
            $result[] = $n;
        }

        return $result;
    }
}
