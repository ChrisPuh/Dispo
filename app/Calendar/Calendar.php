<?php

namespace App\Calendar;

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
                'isToday' =>$this->day && $date->isToday(),
                'selected' => $this->day && $date->is($selectedDate),

                'day' => $date,
            ])->chunk(count($this->getDayOfaWeek()));
    }

    public function getDayOfaWeek():array
    {
        return [ 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    }


}
