<?php

function getbooks(array $books)
{
    foreach ($books as $book) {
        echo  '<div class="content">'
            . '<img src=' . $book["image"] . ' class="cover" alt="' . $book["title"] . ' books cover">'
            . '<h2>' . $book["auther"] . '</h2>'
            . '<h2>' . $book["title"] . '</h2>'
            . '<h3>' . $book["chapter"] . '</h3>'
            . '<p>' . $book["description"] . '</p>'
            . '</div>';
    }
}