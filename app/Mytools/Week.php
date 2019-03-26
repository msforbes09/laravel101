<?php

namespace App\Mytools;

use App\Mytools\Day;

class Week
{
    public $weekNo;
    protected $firstDay;
    protected $days = [];

    function __construct($day)
    {
        $this->weekNo = date('W', $day);

        $this->setFirstDay($day);
        $this->generateDays($this->firstDay);
    }

    protected function setFirstDay($day)
    {
        return $this->firstDay = mktime(0, 0, 0, date('n', $day), (date('j', $day) - date('N', $day) + 1), date('Y', $day));
    }

    protected function generateDays($day)
    {
        for ($i=0; $i < 7; $i++) {
            $this->days[ strtolower(date('D', $day)) ] = new Day($day);

            $day = mktime(0, 0, 0, date('n', $day), date('j', $day) + 1, date('Y', $day));
         } 
    }

    public function get($weekday)
    {
        return array_key_exists($weekday, $this->days) ? $this->days[$weekday] : '';
    }

    public function getDate($weekday)
    {
        return array_key_exists($weekday, $this->days) ? $this->days[$weekday]->fullDate : '';
    }

    public function getDay($weekday)
    {
        return array_key_exists($weekday, $this->days) ? $this->days[$weekday]->day : '';
    }
}
