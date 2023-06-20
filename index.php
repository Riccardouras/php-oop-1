
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
        return "Title: " . $this->title . "<br>Genre: " . $this->genre . "<br>Year: " . $this->year;
    }
}
// prima istanza
$movie1 = new Movie("The Ring", "Horror", 2002);
// seconda istanza
$movie2 = new Movie("Guardiani della Galassia", "Fantascienza", 2014);
// terza istanza
$movie3 = new Movie("Scary Movie", "Commedia", 2000);

// Stampa dei valori delle proprietà di Movie

echo "<h2>Movie 1</h2>";
echo $movie1->getDetails();
echo "<br><br>";


echo "<h2>Movie 2</h2>";
echo $movie2->getDetails();
echo "<br><br>";


echo "<h2>Movie 3</h2>";
echo $movie3->getDetails();