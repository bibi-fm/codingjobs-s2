<?php

class Movie
{
    public $title;
    public $release_year;

    public function __construct($title, $year)
    {
        $this->title = $title;
        $this->release_year = $year;
    }
}
