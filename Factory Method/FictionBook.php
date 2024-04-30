<?php

include_once 'Book.php';

class FictionBook extends Book
{
    public function getInfo(): string
    {
        return "Fiction Book: {$this->title} by {$this->author}";
    }
}
?>