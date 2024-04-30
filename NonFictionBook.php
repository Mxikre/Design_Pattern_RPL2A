<?php

include_once 'Book.php';

class NonFictionBook extends Book
{
    public function getInfo(): string
    {
        return "Non-Fiction Book: {$this->title} by {$this->author}";
    }
}
?>