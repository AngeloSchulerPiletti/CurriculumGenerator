<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sass/index.css">
    <link rel="stylesheet" href="/sass/infoContainer.css">
    <link rel="shortcut icon" href="/assets/favicon/employee (1).svg" type="image/x-icon">


    <title>Curriculum</title>
</head>
<?php

?>

<body>
    <div id="info_container">
        <p id="message"></p>
    </div>

    <header>
        <a href="/">
            <img src="/assets/favicon/employee.svg" width="100px">
            <h1>CURRICULUM <sub>GENERATOR</sub></h1>
        </a>
    </header>
    <main>
        <?php
        include 'App/Routes/Web.php';

        solveURL();

        ?>
    </main>
    <footer></footer>
</body>
<script src="/js/infoHover.js"></script>

</html>