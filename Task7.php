<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        unset($arr[$position]);
        $newArr = [];
        foreach ($arr as $ar) {
            $newArr[] = $ar;
        }
        unset($arr);
        foreach ($newArr as $newAr) {
            $arr[] = $newAr;
        }

        return $arr;
    }
}

$test = new Task7;

try {
    $example = $test->main([9, 7, 8, 4, 5, 6, 1], 4);
    if ($example) {
        print_r($example);
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
