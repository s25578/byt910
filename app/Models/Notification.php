<?php

namespace App\Models;

class Notification
{

    private int $id;
    private int $userId;
    private string $text;
    private int $createdAt;

    public function __construct(int $id, int $userId, string $text, int $createdAt)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->text = $text;
        $this->createdAt = $createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
