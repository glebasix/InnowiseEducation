<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        $now = new \DateTime();
        $birthdayDate = \DateTime::createFromFormat('d-m-Y', $date);
        $interval = $now->diff($birthdayDate);

        return $interval->d;
    }
}

$test = new Task2;

try {
    $example = $test->main('14-09-2022');
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
