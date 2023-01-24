<?php
    class Movie {
        public $name;
        public $director;
        public $year;
        public $genre;

        public function __construct($name, $director, $year, $genre) {
            $this->name = $name;
            $this->director = $director;
            $this->year = $year;
            $this->genre = $genre;
        }

        public function getName() {
            return $this->name;
        }

        public function getDirector() {
            return $this->director;
        }

        public function getYear() {
            return $this->year;
        }

        public function getGenres() {
            return implode(', ', $this->genre);
        }

        public function getFullInfo() {
            $str = "<div><h2>" . $this->getName() . "</h2>"
                    . $this->getDirector() . "<br>"
                    . $this->getGenres() . "<br>"
                    . $this->getYear() . "<br></div>";

            return $str;
        }
    }
?>
