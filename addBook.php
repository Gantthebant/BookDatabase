<?php
require_once 'db.php';
$db = 'booksDB';
$pdo = connectToDB($db);
addnewbook($pdo, $_POST);
header('Location: index.php');
