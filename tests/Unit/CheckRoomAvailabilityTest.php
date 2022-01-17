<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CheckRoomAvailabilityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $room = new Room(false);
        $user = new User(false);

        $this->assertTrue($room->canBook($user));
    }
}
