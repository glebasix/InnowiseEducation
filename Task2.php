<?php

namespace src;

class Task2
{
    /**
     * @param string $date
     *
     * @return int
     */
    public function main(string $date): int
    {
        if (!is_string($date)) {
            return throw new \InvalidArgumentException();
        }
        $now = new \DateTime();
        $birthdayDate = \DateTime::createFromFormat('d-m-Y', $date);
        $interval = $now->diff($birthdayDate);

        return $interval->days;
    }
}
