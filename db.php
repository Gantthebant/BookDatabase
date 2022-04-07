<?php

///**
// * Get a connection to a MySQL database.
// *
// * utf8mb4 is the recommended character set for modern MySQL databases.
// *
// * The PDO MySQL driver uses emulated prepared statements by default. As MySQL
// * supports prepared statements, emulation is turned off.
// *
// * @param string $db The name of a database.
// * @return PDO A PDO instance representing a connection to the database.
// */
function connectToDB(string $db): PDO
{
    $host = 'db';
    $charset = 'utf8mb4';
    $user = 'root';
    $pass = 'password';

    $dataSourceName = "mysql:host=$host;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $dbConnection = new PDO($dataSourceName, $user, $pass, $options);
    } catch (PDOException $excptn) {
        throw new PDOException($excptn->getMessage(), (int)$excptn->getCode());
    }

    return $dbConnection;
}

///**
// * @param PDO $dbConnection The database connection.
// * @param string $sql An SQL statement.
// * @param array|null $params [Optional] An associative array of parameters to
// *                           be bound to named parameters.
// * @return array Rows from the database.
// */
function fetchAll(PDO $dbConnection, string $sql, array $params = null): array
{
    $query = $dbConnection->prepare($sql);

    $query->execute($params);

    return $query->fetchAll();
}

function fetchAllbooksData(PDO $dbConnection): array
{
    $sql = 'SELECT `auther`, `title`, `chapter`, `description`, `image`, `authors`.`name` AS `auther`, `series`.`name` AS `chapter`
            FROM `books`
            INNER JOIN `authors` ON `books`.`auther` = `authors`.`id`
            INNER JOIN `series` ON `books`.`chapter` = `series`.`id`;';
    return fetchAll($dbConnection, $sql);
}

function addNewBook(PDO $pdo, array $formdata)
{
    $query = $pdo->prepare(
        "INSERT INTO `books` (`auther`, `title`, `chapter`, `description`, `image`)
                VALUES (:auther, :title, :chapter, :description, :image);"
    );

    $auther = $formdata['auther'];
    $title = $formdata['title'];
    $chapter = $formdata['chapter'];
    $description = $formdata['description'];
    $image = $formdata['image'];

    $query->execute([
        'auther' => $auther,
        'title' => $title,
        'chapter' => $chapter,
        'description' => $description,
        'image' => $image,
    ]);
}

function fetchauthers(PDO $pdo): array
{
    $sql =
        'SELECT `authors`.`id`, `authors`.`name`' .
        ' FROM `authors` ' .
        ' ORDER BY `authors`.`name`;';

    return fetchAll($pdo, $sql);
}

function fetchseries(PDO $pdo): array
{
    $sql =
        'SELECT `series`.`id`, `series`.`name`' .
        ' FROM `series` ' .
        ' ORDER BY `series`.`name`;';

    return fetchAll($pdo, $sql);
}

$pdo = connectToDB('booksDB');

$books = fetchAllbooksData($pdo);
