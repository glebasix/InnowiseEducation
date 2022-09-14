<?php

namespace src;

class Task4
{
    /**
     * @param string $input
     *
     * @return string
     */
    public function main(string $input): string
    {
        $arrayClean = preg_split("/[\s_-]+/", $input);
        $result = [];
        foreach ($arrayClean as $arr) {
            $result[] = ucfirst($arr);
        }

        return implode($result);
    }
}
