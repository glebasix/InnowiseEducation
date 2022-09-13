<?php

namespace src;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $firstDate = new \DateTime();
        $lastDate = new \DateTime();
        $firstDate->setDate($year, $month, 1);
        $lastDate->setDate($lastYear, $lastMonth, 1);
        $counter = 0;
        while ($firstDate <= $lastDate) {
            if ($firstDate->format('l') == $day) {
                $counter++;
            }
            $firstDate->modify('+1 month');
        }

        return $counter;
    }
}

$test = new Task6;

try {
    $example = $test->main(2020, 2022, 1, 12);
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
