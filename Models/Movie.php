<?php
//creo la classe Movie
class Movie
{
    //variabili comuni con le istanze
    private $name;
    private $year;
    public $genres;
    private $description;
    public $cast;


    function __construct(string $_name, int $_year, array $_genres, string $_description, array $_cast = [])
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->genres = $_genres;
        $this->description = $_description;
        $this->cast = $_cast;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getInfo()
    {
        return $this->name . '<br>' . $this->year . '<br>' . implode(' ', $this->genres) . '<br>' . $this->description . '<br>' . implode(' ', $this->cast);
    }




}


?>