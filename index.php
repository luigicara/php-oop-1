<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOB Movies</title>

    <style>

        * {
            margin: 1rem 0.5rem;
            padding: 0;
            box-sizing: border-box;
        }

    </style>

    <?php

        require_once __DIR__ . "/models/movies.php";

        $movie1 = new Movie("Beautiful Boy", "Felix Van Groeningen", 2018, ["Drama", "Biography"]);

        $movie2 = new Movie("Goodfellas", "Martin Scorsese", 1990, ["Gangster", "Drama"]);

        $movie3 = new Movie("The Notebook", "Nick Cassavetes", 2004, ["Romantic", "Drama"]);
    
        $movies = [$movie1, $movie2, $movie3];

    ?>
</head>

<body>

<?php

    foreach ($movies as $movie) {
        echo $movie->getFullInfo();
    }

?>
</body>
</html>