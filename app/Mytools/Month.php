<?php

namespace App\Mytools;

class Month
{
    public $name;
    public $firstDay;    
    public $lastDay;    
    public $firstSunday;
    public $lastSunday;
    public $noOfWeeks;
    public $weeks = [];

    function __construct($month, $year)
    {
        $this->firstDay = mktime(0, 0, 0, $month, 1, $year);
        $this->lastDay = mktime(0, 0, 0, $month, date('t', $this->firstDay), $year);

        $this->firstSunday = $this->getSunday($this->firstDay);
        $this->lastSunday = $this->getSunday($this->lastDay);

        $this->name();
        $this->setNoOfWeeks();
        $this->generateWeeks();
    }

    protected function name()
    {
        $this->name = date('F', $this->firstDay);
    }

    protected function getSunday($day)
    {
        return mktime(0, 0, 0,
            date('m', $day),
            date('d', $day) - date('w', $day),
            date('Y', $day)
        );
    }

    protected function setNoOfWeeks()
    {
        $this->noOfWeeks = date('W', $this->lastSunday) - date('W', $this->firstSunday) + 1;
    }

    protected function generateWeeks()
    {
        for ($i=0; $i < $this->noOfWeeks ; $i++) { 
            array_push($this->weeks, $i);
        }
    }
}