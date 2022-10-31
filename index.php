<?php
class Movie { 
    public $title;
    public $productionDate;
    public $productionCountry;
    public $genre = '';
    public $rating;
    public $cast = [];

    function __construct($_title){
        $this->title = $_title;
    }
}

?>
