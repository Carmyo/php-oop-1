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
    public function addActor($_cast){
        $this->cast[] = $_cast;
    }
}

?>

<?php
$movie = new Movie('The Last Jedi');
$movie->productionDate = '2017';
$movie->productionCountry = 'USA';
$movie->genre = 'Fantasy';
$movie->rating = '13+';
$movie->addActor('Daisy Ridley');
var_dump ($movie);

?>

<?php
$movie = new Movie('Blade Runner');
$movie->productionDate = '1982';
$movie->productionCountry = 'USA';
$movie->genre = 'sci-fi';
$movie->rating = '18+';
$movie->addActor('Harrison Ford');
var_dump ($movie);

?>


