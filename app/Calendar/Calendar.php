<?php

namespace App\Calendar;

use Carbon\Carbon;
use Carbon\CarbonImmutable;

class Calendar
{
    public function __construct(
        public int $year,
        public int $month,
        public int $day
    )
    {
    }

    public function buildMonth()
    {
        $selectedDate = CarbonImmutable::create($this->year, $this->month, $this->day );
        $startOfMonth = $selectedDate->startOfMonth();
        $endOfMonth = $startOfMonth->endOfMonth();

        $startOfWeek = $startOfMonth->startOfWeek();
        $endOfWeek = $endOfMonth->endOfWeek();

        return collect($startOfWeek->toPeriod($endOfWeek)->toArray())
            ->map(fn($date) => [
                'path' => $date->format('/Y/m/d'),
                'withinMonth' => $date->between($startOfMonth, $endOfMonth),
                'selected' => $this->day && $date->is($selectedDate),

                'day' => $date,
            ])->chunk(7);
    }


}
