<?php

namespace src;

class Task10
{
    public function main(int $input): array
    {
        $arrayResult[] = $input;
        while ($input != 1) {
            if ($input % 2 == 0) {
                $input /= 2;
            } else {
                $input = $input * 3 + 1;
            }
            $arrayResult[] = $input;
            $this->main($input);
        }

        return $arrayResult;
    }
}

$test = new Task10;

try {
    $example = $test->main(12);
    if ($example) {
        print_r($example);
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
