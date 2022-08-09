<?php

namespace src;

class Task8
{
    public function main(string $json): void
    {
        $data = json_decode($json, true);
        if (!(json_last_error() === JSON_ERROR_NONE)) {
            throw new \InvalidArgumentException('function accepts valid json only');
        }
        $result = $this->toUnnestedArray($data);
        foreach ($result as $key => $value) {
            echo $key . ': ' . $value . "\n";
        }
    }

    public function toUnnestedArray(array $array): array
    {
        $result = [];
        foreach ($array as $key => $value) {
            if (!is_array($value)) {
                $result[$key] = $value;
            } else {
                $result = array_merge($result, $this->toUnnestedArray($value));
            }
        }

        return $result;
    }
}
