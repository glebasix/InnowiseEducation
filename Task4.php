<?php

namespace src;

class Task4
{
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

$test = new Task4;

try {
    $example = $test->main('The quick-brown_fox jumps over the_lazy-dog');
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
