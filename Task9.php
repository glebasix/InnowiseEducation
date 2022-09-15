<?php

namespace src;

class Task9
{
    /**
     * @param array $arr
     * @param int   $number
     *
     * @return array
     */
    public function main(array $arr, int $number): array
    {
        if (count($arr) < 3 || $number <= 0) {
            return throw new \InvalidArgumentException();
        }
        foreach ($arr as $ar) {
            if ($ar < 0) {
                return throw new \InvalidArgumentException();
            }
        }
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
