<?php

namespace src;

class Task6
{
    /**
     * @param int    $year
     * @param int    $lastYear
     * @param int    $month
     * @param int    $lastMonth
     * @param string $day
     *
     * @return int
     */
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($lastYear < 0 || $lastYear > $year) {
            return throw new \InvalidArgumentException();
        }

        $Date = new \DateTime();
        $lastDate = new \DateTime();
        $Date->setDate($year, $month, 1);
        $lastDate->setDate($lastYear, $lastMonth, 1);
        $counter = 0;
        while ($lastDate <= $Date) {
            if ($lastDate->format('l') == $day) {
                $counter++;
            }
            $lastDate->modify('+1 month');
        }

        return $counter;
    }
}
