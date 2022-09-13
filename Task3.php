<?php

namespace src;

class Task3
{
    public function main(int $number): int
    {
        while ($number >= 10) {
            $number = array_sum((str_split((string)$number)));
        }

        return $number;
    }
}

$test = new Task3;

try {
    $example = $test->main('7778');
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
