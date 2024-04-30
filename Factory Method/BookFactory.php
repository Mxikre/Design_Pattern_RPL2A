<?php

include_once 'Book.php';
include_once 'FictionBook.php';
include_once 'NonFictionBook.php';

class BookFactory
{
    public function createBook($title, $author): Book
    {
        if (strpos(strtolower($title), 'fiction') !== false) {
            return new FictionBook($title, $author);
        } else {
            return new NonFictionBook($title, $author);
        }
    }
}
?>