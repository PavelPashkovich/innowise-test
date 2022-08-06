<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        $wordsToUpper = ucwords($input, '-_ ');
        return str_replace(['-', '_', ' '], '', $wordsToUpper);
    }
}
