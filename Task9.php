<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        $arrayResults = [];
        for ($i = 0; $i < count($arr); $i++) {
            if (isset($arr[$i + 1]) && isset($arr[$i + 2])) {
                $sum = $arr[$i] + $arr[$i + 1] + $arr[$i + 2];
                $secondNumber = $arr[$i + 1];
                $thirdNumber = $arr[$i + 2];
                if ($sum == $number) {
                    $arrayResults[] = "$arr[$i] + "."$secondNumber + "."$thirdNumber = "."$sum";
                }
            }
        }

        return $arrayResults;
    }
}

$test = new Task9;

try {
    $example = $test->main([1, 4, 6, 8, 9, 2, 4, 5], 11);
    if ($example) {
        print_r($example);
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
