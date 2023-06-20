
<?php
// creo classe Movie
class Movie {
    public $title;
    public $genre;
    public $year;
    
    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getDetails() {
        $genresVar = " ";
        foreach ($this->genre as $genres) {
            $genresVar .= $genres . ", ";
        }
        return "Title: " . $this->title . "<br>Genre: " . $this->$genresVar . "<br>Year: " . $this->year;
    }
}
// creo oggetto movie
$movies = array(
    new Movie("The Ring", ["Horror"], 2002),
    new Movie("Guardiani della Galassia", ["Fantascienza", "Azione"], 2014),
    new Movie("Scary Movie", ["Commedia", "Demenziale"], 2000)
);
// Stampa dei valori delle proprietà di Movie

foreach ($movies as $movie) {
    echo "<h2>" . $movie->title . "</h2>";
    echo $movie->getDetails();
    echo "<br><br>";
}