<?php

namespace App\Models;

class Item
{
    private int $id;
    private string $name;
    private float $price;
    private bool $isBorrowed;
    private bool $isForSale;

    public function __construct(
        int $id,
        string $name,
        float $price,
        bool $isBorrowed,
        bool $isForSale
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->isBorrowed = $isBorrowed;
        $this->isForSale = $isForSale;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function isBorrowed(): bool
    {
        return $this->isBorrowed;
    }

    public function setIsBorrowed(bool $isBorrowed): void
    {
        $this->isBorrowed = $isBorrowed;
    }

    public function isForSale(): bool
    {
        return $this->isForSale;
    }

    public function setIsForSale(bool $isForSale): void
    {
        $this->isForSale = $isForSale;
    }


}
