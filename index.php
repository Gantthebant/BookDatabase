<?php
require_once 'connect.php';
require_once 'function.php';

if (isset($_POST['create'])) {
    $auther = $_POST['auther'];
    $title = $_POST['title'];
    $chapter = $_POST['chapter'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    echo $auther . ' ' . $title . ' ' . $chapter . ' ' . $description . ' ' . $image;

    $sql = "INSERT INTO books (auther, title, chapter, description, image) VALUES ('$auther', '$title', '$chapter', '$description', '$image')";
    $stmtinsert = connectToDB('booksDB')->prepare($sql);
    $results = $stmtinsert->execute();

    if ($results) {
        echo ' we are in';


    } else {
        echo 'broken';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collection</title>
</head>

<body>
<h1>BOOK COLLECTION</h1>
<div class="container">
<?php getbooks($books);?>
</div>

</body>
</html>
