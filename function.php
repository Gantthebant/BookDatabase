<?php

function getbooks(array $books): string
{
    $bookstr ='';
    foreach ($books as $book) {
        $bookstr .= '<div class="content">'
            . '<img src=' . $book["image"] . ' class="cover" alt="' . $book["title"] . ' books cover">'
                .'<div class="text">'
                . '<h2>' . $book["auther"] . '</h2>'
                . '<hr class="top">'
                . '<h2>' . $book["title"] . '</h2>'
                . '<h3>' . $book["chapter"] . '</h3>'
                . '<hr class="bot">'
                . '<p>' . $book["description"] . '</p>'
                . '</div>'
            . '</div>';
    }

    return $bookstr;
}
