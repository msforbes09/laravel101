<?php

namespace App\Http\Controllers;

use App\Mytools\Week;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return $this->generateWeek($this->today());
        // return view('calendar.index')
            // ->with('week', $this->firstWeek());
    }

    protected function showDate($date)
    {
        return date('F j, Y', $date);
    }

    protected function today()
    {
        // return mktime(0, 0, 0, date('n'), date('j'), date('Y'));
        return mktime(0, 0, 0, 4, 9, 2018);
    }

    protected function dayOfFirst()
    {
        return date('w', mktime(0, 0, 0, date('n'), 1, date('Y')));
    }

    protected function numberOfWeeks($month)
    {
        return 5;
    }

    protected function generateWeek($day)
    {
        // return $this->showDate($day);
        return [
            'sun' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)), date('Y', $day))),
            'mon' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)) + 1, date('Y', $day))),
            'tue' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)) + 2, date('Y', $day))),
            'wed' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)) + 3, date('Y', $day))),
            'thu' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)) + 4, date('Y', $day))),
            'fri' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)) + 5, date('Y', $day))),
            'sat' => $this->showDate(
                    mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('w', $day)) + 6, date('Y', $day))),
        ];
    }
}
