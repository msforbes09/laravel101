<?php

namespace App\Mytools;

use App\Mytools\Week;

class Month
{
    public $name;
    public $firstDay;    
    public $lastDay;    
    public $noOfWeeks;
    public $weeks = [];

    function __construct($month, $year)
    {
        $this->firstDay = mktime(0, 0, 0, $month, 1, $year);
        $this->lastDay = mktime(0, 0, 0, $month, date('t', $this->firstDay), $year);

        $this->setName();
        $this->setNoOfWeeks();
        $this->generateWeeks($this->firstDay);
    }

    protected function setName()
    {
        return $this->name = date('F', $this->firstDay);
    }

    protected function setNoOfweeks()
    {
        return $this->noOfWeeks = (date('W', $this->lastDay) - date('W', $this->firstDay) + 1); 
    }

    protected function generateWeeks($day)
    {
        for ($i=0; $i < $this->noOfWeeks; $i++) { 
            array_push(
                $this->weeks,
                    new Week(mktime(0, 0, 0, date('n', $day), date('j', $day) + (7 * $i), date('Y', $day)))
            );
        }
    }
}