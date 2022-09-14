<?php

namespace src;

class Task7
{
    /**
     * @param array $arr
     * @param int   $position
     *
     * @return array
     */
    public function main(array $arr, int $position): array
    {
        if (!isset($arr[$position])) {
            return throw new \InvalidArgumentException();
        }

        unset($arr[$position]);
        $newArr = [];
        foreach ($arr as $ar) {
            $newArr[] = $ar;
        }

        return $newArr;
    }
}

