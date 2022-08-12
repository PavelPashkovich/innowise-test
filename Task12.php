<?php

namespace src;

class Task12
{
    public float $a;
    public float $b;
    public float $result = 0;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add(): object
    {
        $this->result = $this->a + $this->b;

        return $this;
    }

    public function subtract(): object
    {
        $this->result = $this->a - $this->b;

        return $this;
    }

    public function multiply(): object
    {
        $this->result = $this->a * $this->b;

        return $this;
    }

    public function divide(): object
    {
        if ($this->b == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result = $this->a / $this->b;

        return $this;
    }

    public function addX(float $x): object
    {
        $this->result += $x;

        return $this;
    }

    public function subtractBy(float $x): object
    {
        $this->result -= $x;

        return $this;
    }

    public function multiplyBy(float $x): object
    {
        $this->result *= $x;

        return $this;
    }

    public function divideBy(float $x): object
    {
        if ($x == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result /= $x;

        return $this;
    }

    public function getResult(): float
    {
        return $this->result;
    }
}
