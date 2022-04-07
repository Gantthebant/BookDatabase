<?php
require_once 'db.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
$db = 'bookDB';
$pdo = connectToDB($db);
addnewbook($pdo, $_POST);