<?php

namespace Tests\Unit;

use App\Models\DVD;
use PHPUnit\Framework\TestCase;

class DVDTest extends TestCase
{
    private DVD $dvd;

    protected function setUp(): void
    {
        parent::setUp();
        $this->dvd = new DVD(1, 'DVD Title', 10, false, true, 120, 'Director Name');
    }

    /**
     * Get DVD director
     */
    public function test_get_director()
    {
        $this->assertEquals('Director Name', $this->dvd->getDirector());
    }

    /**
     * Set director and check
     */
    public function test_set_director()
    {
        $this->dvd->setDirector('New Director');
        $this->assertEquals('New Director', $this->dvd->getDirector());
    }

    /**
     * Get DVD duration
     */
    public function test_get_duration()
    {
        $this->assertEquals(120, $this->dvd->getDuration());
    }

    /**
     * Set new duration and check
     */
    public function test_set_duration()
    {
        $this->dvd->setDuration(150);
        $this->assertEquals(150, $this->dvd->getDuration());
    }
}
