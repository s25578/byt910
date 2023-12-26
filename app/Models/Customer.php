<?php

namespace App\Models;

class Customer extends User
{
    private array $bookOwned;

    public function __construct(int $id, string $username, string $password, string $email, array $bookOwned)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->bookOwned = $bookOwned;
    }


    public function getBookOwned(): array
    {
        return $this->bookOwned;
    }

    public function setBookOwned(array $bookOwned): void
    {
        $this->bookOwned = $bookOwned;
    }
}
