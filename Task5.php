<?php

namespace src;

class Task5
{
    /**
     * @param int $n
     *
     * @return string
     */
    public function main(int $n): string
    {
        if ($n <= 0) {
            return throw new \InvalidArgumentException();
        }

        $number1 = '0';
        $number2 = '1';
        $inHead = '0';
        $counter = 2;
        do {
            for ($j = 0; $j < $counter; $j++) {
                $number1_count = strlen($number1 = strrev($number1));
                $number2_count = strlen($number2 = strrev($number2));

                $zeroFill = str_repeat('0', abs($number2_count - $number1_count));
                ($number1_count < $number2_count) ? $number1 .= $zeroFill : $number2 .= $zeroFill;
                $count = strlen($number2);


                for ($i = 0; $i < $count; $i++) {
                    $numberSum = $number1[$i] + $number2[$i] + $inHead;
                    $result .= ($numberSum > 9) ? $numberSum - 10 : $numberSum;
                    $inHead = ($numberSum > 9) ? 1 : 0;
                }
                $finalFibonacci = ($inHead == 0) ? strrev($result) : strrev($result . '1');
                $number1 = $number2;
                $number2 = $finalFibonacci;
                unset($result, $inHead);

                $totalLength = strlen($finalFibonacci);
                if ($n == $totalLength) {
                    break 2;
                } elseif ($n > $totalLength) {
                    $counter++;
                }
            }
        } while ($n >= $totalLength);

        return $finalFibonacci;
    }
}
