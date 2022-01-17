<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckRoomAvailabilityTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */

    public function npr_us_npr_rm() { //non premium user , non premium room
        $user = User::find(1);
        $room = Room::find(1);
        $this->assertTrue($room->canBook($user));
    }
    public function npr_us_pr_rm() { //non premium user , premium room
        $room = Room::find(2);
        $user = User::find(1);
        $this->assertFalse($room->canBook($user));
    }
    public function pr_us_pr_rm() { //premium user , premium room
        $room = Room::find(2);
        $user = User::find(2);
        $this->assertTrue($room->canBook($user));
    }
    public function pr_us_npr_rm() { //premium user , non premium room
        $room = Room::find(1);
        $user = User::find(2);
        $this->assertTrue($room->canBook($user));
    }
}
