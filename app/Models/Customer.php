<?php

namespace App\Models;

class Customer
{
    private array $bookOwned;

    public function getBookOwned(): array
    {
        return $this->bookOwned;
    }

    public function setBookOwned(array $bookOwned): void
    {
        $this->bookOwned = $bookOwned;
    }
}
