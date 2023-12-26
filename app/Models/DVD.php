<?php

namespace App\Models;

class DVD extends Item
{
    private int $duration; // seconds
    private string $director;

    public function __construct(
        int $id,
        string $name,
        float $price,
        bool $isBorrowed,
        bool $isForSale,
        int $duration,
        string $director
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->isBorrowed = $isBorrowed;
        $this->isForSale = $isForSale;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }


}
