<?php

namespace App\Mytools;

class Week
{
    public $weekNo;
    public $firstDay;
    public $days = [];

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
             array_push($this->days,
                date('M d Y', mktime(0, 0, 0, date('n', $day), date('j', $day) + $i, date('Y', $day)))
            );
         } 
    }
}
