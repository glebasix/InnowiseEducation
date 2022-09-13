<?php

namespace src;

class Task12
{
    private $first;
    private $second;
    public $result;

    public function __construct($first, $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function add()
    {
        $this->result = $this->first + $this->second;

        return $this;
    }

    public function substruct()
    {
        $this->result = $this->first - $this->second;

        return $this;
    }

    public function multiply()
    {
        $this->result = $this->first * $this->second;

        return $this;
    }

    public function divide()
    {
        $this->result = $this->first / $this->second;

        return $this;
    }

    public function addBy(int $number)
    {
        $this->result += $number;

        return $this;
    }

    public function substructBy(int $number)
    {
        $this->result -= $number;

        return $this;
    }

    public function multiplyBy(int $number)
    {
        $this->result *= $number;

        return $this;
    }

    public function divideBy(int $number)
    {
        $this->result /= $number;

        return $this;
    }

    public function __toString(): string
    {
        return $this->result;
    }
}

$test = new Task12(12, 6);

try {
    $example = $test->add()->divideBy(9);
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
