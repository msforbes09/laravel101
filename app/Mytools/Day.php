<?php

namespace App\Mytools;

class Day
{
    protected $value;

    function __construct($day)
    {
        $this->value = $day;
    }

    public function getFullDate()
    {
        return date('M d Y', $this->$value);
    }
}