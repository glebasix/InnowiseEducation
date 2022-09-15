<?php

namespace src;

class Task8
{
    /**
     * @param string $json
     *
     * @return string
     */
    public function main(string $json): string
    {
        $dataArray = json_decode($json, true);
        if (!is_array($dataArray)) {
            return throw new \InvalidArgumentException();
        }
        $decodedString = [];
        foreach ($dataArray as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $keys => $values) {
                    $decodedString[] = "$keys: $values";
                }
            } else {
                $decodedString[] = "$key: $value";
            }
        }

        return implode(PHP_EOL, $decodedString);
    }
}
