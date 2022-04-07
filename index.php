<?php
require_once 'db.php';
require_once 'function.php';

$db = 'booksDB';
$pdo = connectToDB($db);
$authors = fetchauthers($pdo);
$series = fetchseries($pdo);
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
<h2 class="ftitle">NEW BOOK</h2>
<div class="form">
    <form action="addBook.php" , method="post" class="fields">
        <label for="auther">Author</label>
        <select id="auther" name="auther" required>
            <?php
            foreach ($authors as $auther) {
                echo '<option value="' . $auther['id'] . '">'
                    . $auther['name']
                    . '</option>';
            }
            ?>
        </select>
        <label for="title">Title</label>
        <input id="title" type="text" name="title" required>
        <label for="chapter">Series</label>
        <select id="chapter" name="chapter" required>
            <?php
            foreach ($series as $serie) {
                echo '<option value="' . $serie['id'] . '">'
                    . $serie['name']
                    . '</option>';
            }
            ?>
        </select>
        <label for="description">About The Book</label>
        <input id="description" type="text" name="description" required>
        <label for="image">Link Image</label>
        <input id="image" type="text" name="image" required>
        <input type="submit" name="create" value="ADD">
    </form>
</div>
</body>
</html>
