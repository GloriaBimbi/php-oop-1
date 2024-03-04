<?php

class Production{
    public string $title;
    public string $language;
    public string $vote;

    public function __construct($title, $language, $vote_number){
        $this->title = $title;
        $this->language = $language;
        $this->vote = Production::set_vote($vote_number);
    }
    
    public static function set_vote($vote_number){
        $relative_vote = $vote_number . '/' . 10;
        return $relative_vote;
    }

    public function get_title(){
        return $this->title;
    }
    
}
$film_1 = new Production ('Interstellar', 'English', 10 );
$film_2 = new Production ('Big Fish', 'English', 9 );
$film_3 = new Production ('Barbie', 'English', 7 );
$film_4 = new Production ('Era Ora', 'Italian', 8 );


// var_dump($film_1, $film_2, $film_3, $film_4);
// var_dump($film_2->get_title());

$films = [
    $film_1,
    $film_2,
    $film_3,
    $film_4,
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produzioni</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-5">Productions:</h1>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($films as $film): ?>
                <tr>
                    <td><?= $film->get_title() ?></td>
                    <td><?= $film->language ?></td>
                    <td><?= $film->vote ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>   
</body>
</html>