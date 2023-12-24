<?php

namespace App\Models;

class Transaction
{
    public int $id;
    public string $userId;
    public int $createdAt;
    public int $itemId;
    public float $price;
}
