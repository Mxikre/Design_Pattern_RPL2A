<?php

abstract class Book
{
    protected $title;
    protected $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    abstract public function getInfo(): string;
}
?>