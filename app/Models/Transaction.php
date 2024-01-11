<?php

namespace App\Models;

class Transaction
{
    private int $id;
    private int $userId;
    private int $createdAt;
    private int $itemId;
    private float $price;

    public function __construct(
        int $id,
        int $userId,
        int $createdAt,
        int $itemId,
        float $price
    )
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->itemId = $itemId;
        $this->price = $price;
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

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

}
