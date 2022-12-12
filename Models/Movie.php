<?php
//creo la classe Movie
class Movie
{
    //variabili comuni con le istanze
    public $name;
    public $year;
    public $description;
    public $cast;


    function __construct(string $_name, int $_year, string $_description, array $_cast = [])
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->description = $_description;
        $this->cast = $_cast;
    }




}


?>