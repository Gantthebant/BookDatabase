<?php
require_once 'db.php';
require_once 'function.php';
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collection</title>
</head>
<body>
<h1>BOOK COLLECTION</h1>
<div class="splash">
    <img src="images/splash.jpg" alt="Picture shelf of books" class="splashs">
</div>
<div class="container">
    <?php getbooks($books); ?>
</div>
</body>
</html>
