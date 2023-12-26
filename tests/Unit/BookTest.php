<?php

namespace Tests\Unit;

use App\Models\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    private Book $book;

    protected function setUp(): void
    {
        parent::setUp();
        $this->book = new Book(1, 'Book Title', 20, false, true, 'ISBN123', 'Fiction');
    }

    public function test_get_isbn()
    {
        $this->assertEquals('ISBN123', $this->book->getIsbn());
    }

    public function test_set_isbn()
    {
        $this->book->setIsbn('NewISBN');
        $this->assertEquals('NewISBN', $this->book->getIsbn());
    }

    public function test_get_genre()
    {
        $this->assertEquals('Fiction', $this->book->getGenre());
    }

    public function test_set_genre()
    {
        $this->book->setGenre('Mystery');
        $this->assertEquals('Mystery', $this->book->getGenre());
    }
}
