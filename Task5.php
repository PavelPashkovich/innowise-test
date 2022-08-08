<?php

namespace src;

class Task5
{
    public function main(int $n): string
    {
        if ($n <= 0) {
            throw new \InvalidArgumentException('main function only accepts integers > 0. Input was: ' . $n);
        }

        $current = 0;
        $next = 1;
        $sum = 0;
        while (strlen($sum) < $n) {
            $sum = $this->addStrings($current, $next);
            $current = $next;
            $next = $sum;
        }

        return $sum;
    }

    public function addStrings(string $num1, string $num2): string
    {
        $length = strlen($num2);
        $num1 = str_pad($num1, $length, '0', STR_PAD_LEFT);
        $result = '';
        $helper = 0;
        for ($i = $length - 1; $i >= 0; $i--) {
            $sum = (int)$num1[$i] + (int)$num2[$i] + $helper;
            $helper = 0;
            if ($sum > 9) {
                $sum = $sum % 10;
                $helper = 1;
            }
            $result = $sum . $result;
        }

        return $helper ? ($helper . $result) : $result;
    }
}
