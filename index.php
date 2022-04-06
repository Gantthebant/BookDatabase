<?php
require_once 'connect.php';
require_once 'function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/normalize.css">
    <link href="styles/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collection</title>
</head>
<body>
<h1>BOOK COLLECTION</h1>
<div class="container">
<?php getbooks($pdo, $books); ?>
</div>
</body>
</html>
