<?php

include_once 'BookFactory.php';

$bookFactory = new BookFactory();

$book1 = $bookFactory->createBook("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = $bookFactory->createBook("Sapiens: A Brief History of Humankind", "Yuval Noah Harari");

$books = [$book1, $book2];

foreach ($books as $book) {
    echo $book->getInfo() . "<br>";
}
?>