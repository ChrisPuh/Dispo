<?php

namespace App\Http\Controllers;

use App\Calendar\Calendar;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class CalendarIndexController extends Controller
{
    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    public function __invoke()
    {
        $year = 2023;
        $month = 2;
        $day = Carbon::today()->day;

        $calendar = new Calendar(year: $year, month: $month, day: $day);


        return view('calendar.index', [
            'calendar' => $calendar->buildMonth(),
            'today' => Carbon::now(),
            'days' => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        ]);
    }
}
