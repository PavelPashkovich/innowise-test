<?php

namespace src;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if (!(strlen($year) == 4 && strlen($lastYear) == 4 && $month > 0 && $month <= 12 && $lastMonth > 0 && $lastMonth <= 12)) {
            throw new \InvalidArgumentException(
                'valid function arguments format (YYYY, YYYY, m/mm (1-12), m/mm (1-12)). 
                Input was: (' . $year . ', ' . $lastYear . ', ' . $month . ', ' . $lastMonth . ')'
            );
        }
        if (!in_array($day, ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'])) {
            throw new \InvalidArgumentException(
                'day must be one of Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday. 
                Input was: ' . $day
            );
        }

        $fromDate = strtotime("$lastYear-$lastMonth");
        $toDate = strtotime("$year-$month");
        $weekdayCounter = 0;
        while ($fromDate <= $toDate) {
            if (getdate($fromDate)['weekday'] == $day) {
                $weekdayCounter += 1;
            }
            $fromDate = strtotime('+1 Month', $fromDate);
        }

        return $weekdayCounter;
    }
}
