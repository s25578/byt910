<?php

namespace App\Models;

class Book extends Item
{
    private string $isbn;
    private string $genre;

    public function __construct(
        int $id,
        string $name,
        float $price,
        bool $isBorrowed,
        bool $isForSale,
        string $isbn,
        string $genre
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->isBorrowed = $isBorrowed;
        $this->isForSale = $isForSale;
        $this->isbn = $isbn;
        $this->genre = $genre;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }


}
