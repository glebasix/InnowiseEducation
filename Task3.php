<?php

namespace src;

class Task3
{
    /**
     * @param int $number
     *
     * @return int
     */
    public function main(int $number): int
    {
        if ($number < 10) {
            return throw new \InvalidArgumentException();
        }

        while ($number >= 10) {
            $number = array_sum((str_split((string)$number)));
        }

        return $number;
    }
}
