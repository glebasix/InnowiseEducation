<?php

namespace src;

class Task1
{
    /**
     * @param int $inputNumber
     *
     * @return string
     */
    public function main(int $inputNumber): string
    {
        if (!is_int($inputNumber)) {
            return throw new \InvalidArgumentException();
        }

        $result = ($inputNumber > 30) ? 'More than 30' :
            ($inputNumber > 20 ? 'More than 20' :
                ($inputNumber > 10 ? 'More than 10' :
                    'Equal or less than 10'));

        return $result;
    }
}
