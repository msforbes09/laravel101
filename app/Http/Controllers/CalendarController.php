<?php

namespace App\Http\Controllers;

use App\Mytools\Week;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $week = new Week;
        return $week->alert();
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
        return mktime(0, 0, 0, 3, 2, 2019);
    }

    protected function numberOfWeeks($day)
    {
        $first = date('W', mktime(0, 0, 0, date('n', $day), 2 , date('Y', $day)));
        $last = date('W', mktime(0, 0, 0, date('n', $day) + 1, 1 , date('Y', $day)));

        return $last - $first + 1;
    }

    protected function generateWeek($day)
    {
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
