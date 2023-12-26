<?php

namespace App\Models;

class Administrator extends User
{
    private string $title;

    public function __construct(int $id, string $username, string $password, string $email, string $title)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
