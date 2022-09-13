<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {
        if ($inputNumber > 10) {
            if ($inputNumber > 20) {
                if ($inputNumber > 30) {
                    return 'More than 30';
                }

                return 'More than 20';
            }

            return 'More than 10';
        } else {
            return 'Equal or less than 10';
        }
    }
}

$test = new Task1;

try {
    $example = $test->main('24');
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
