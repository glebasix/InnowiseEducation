<?php

namespace src;

class Task10
{
    /**
     * @param int $input
     *
     * @return array
     */
    public function main(int $input): array
    {
        if ($input <= 0) {
            return throw new \InvalidArgumentException();
        }
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
