<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        $dataArray = json_decode($json, true);
        $decodedString = '';
        foreach ($dataArray as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $keys => $values) {
                    $decodedString .= "$keys : $values"."\n";
                }
            } else {
                $decodedString .= "$key : $value"."\n";
            }
        }

        return $decodedString;
    }
}

$test = new Task8;

try {
    $example = $test->main('{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{
"Publisher": "Little Brown"
 }
  }');
    if ($example) {
        echo $example;
    } else {
        throw new \TypeError();
    }
} catch(\TypeError $e) {
    echo $e->getMessage();
}
