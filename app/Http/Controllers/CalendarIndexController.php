<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonImmutable;

class CalendarIndexController extends Controller
{
    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    public function __invoke()
    {
        $year = 2023;
        $month = 2;

        $startOfMonth = CarbonImmutable::create($year, $month, 1);
        $endOfMonth = $startOfMonth->endOfMonth();

        $startOfWeek = $startOfMonth->startOfWeek();
        $endOfWeek = $endOfMonth->endOfWeek();

        $weeks = collect($startOfWeek->toPeriod($endOfWeek)->toArray())
            ->map(fn($date) => [
                'path' => $date->format('/Y/m/d'),
                'day' => $date,
            ])->chunk(7);



        return view('calendar.index', [
            'calendar' => $weeks,
            'today' => Carbon::now(),
            'days' => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        ]);
    }
}
