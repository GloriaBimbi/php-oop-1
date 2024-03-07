<?php

require_once __DIR__ . "/Models/Production.php";

require_once __DIR__ . "/partials/elements.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once __DIR__ . "/partials/head.php" ?>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-5 text-center">PRODUCTIONS</h1>
        <h3 class="mb-5">Movies:</h3>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Cashier</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once __DIR__ . "/data/db.php"; ?>
                <?php foreach($movies as $movie): ?>
                <tr>
                    <td><?= '"' . $movie->get_title() . '"' ?></td>
                    <td><?= $movie->language ?></td>
                    <td><?= $movie->vote ?></td>
                    <td><?= $movie->genre->name . ': ' . $movie->genre->description ?></td>
                    <td><?= $movie->duration . 'min' ?></td>
                    <td><?= '€' . $movie->cashier . '.000.000' ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h3 class="mb-5 mt-5">Tv Series:</h3>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Seasons</th>
                    <th scope="col">Episodes</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once __DIR__ . "/data/db.php"; ?>
                <?php foreach($tv_series as $tv_serie): ?>
                <tr>
                    <td><?= '"' . $tv_serie->get_title() . '"' ?></td>
                    <td><?= $tv_serie->language ?></td>
                    <td><?= $tv_serie->vote ?></td>
                    <td><?= $tv_serie->genre->name . ': ' . $tv_serie->genre->description ?></td>
                    <td><?= $tv_serie->seasons ?></td>
                    <td><?= $tv_serie->episodes ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>   
</body>
</html>