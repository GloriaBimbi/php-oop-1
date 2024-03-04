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
                <?php require_once __DIR__ . "./data/db.php"; ?>
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