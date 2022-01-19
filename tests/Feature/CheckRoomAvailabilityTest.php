<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Date;
use Tests\TestCase;
use Carbon\Carbon;


class CheckRoomAvailabilityTest extends TestCase
{

    /**
     * A basic feature test example.
     * @test
     * @return void
     */

//    public function npr_us_npr_rm() { //non premium user , non premium room
//        $user = User::find(1);
//        $room = Room::find(1);
//        $this->assertTrue($room->canBook($user));
//    }
//    public function npr_us_pr_rm() { //non premium user , premium room
//        $room = Room::find(2);
//        $user = User::find(1);
//        $this->assertFalse($room->canBook($user));
//    }
//    public function pr_us_pr_rm() { //premium user , premium room
//        $room = Room::find(2);
//        $user = User::find(2);
//        $this->assertTrue($room->canBook($user));
//    }
//    public function pr_us_npr_rm() { //premium user , non premium room
//        $room = Room::find(1);
//        $user = User::find(2);
//        $this->assertTrue($room->canBook($user));
//    }


//        public function need_all_credit() {  // Needs all credit
//            $user = User::find(2);
//            $booking = new Booking();
//            $data = [
//                'total' => $user->credit
//            ];
//            $this->assertTrue($booking->needAllCredit($user,$data));
//        }

//    public function need_all_credit() { // Doesnt need all credit
//        $user = User::find(2);
//        $booking = new Booking();
//        $data = [
//            'total' => $user->credit - 40
//        ];
//        $this->assertFalse($booking->needAllCredit($user,$data));
//    }

//    public function is_start_date_greater_than_end_date() { // Start date is greater
//        $booking = new Booking();
//        $start_date =  Carbon::now()->addHour(1)->format('Y-m-d H:i:s');
//        $end_date = Carbon::now('UTC')->format('Y-m-d H:i:s');
//        $this->assertTrue($booking->isValidDate($start_date,$end_date));
//    }

//    public function is_start_date_greater_than_end_date() { // Equal date
//        $booking = new Booking();
//        $start_date = Carbon::now('UTC')->format('Y-m-d H:i:s');
//        $end_date = Carbon::now('UTC')->format('Y-m-d H:i:s');
//        $this->assertFalse($booking->isValidDate($start_date,$end_date));
//    }
//
//    public function is_start_date_greater_than_end_date() { // Start date is less than end date
//        $booking = new Booking();
//        $start_date = Carbon::now('UTC')->format('Y-m-d H:i:s');
//        $end_date = Carbon::now('UTC')->addHour(1)->format('Y-m-d H:i:s');
//        $this->assertFalse($booking->isValidDate($start_date,$end_date));
//    }

//      public function is_negative_credit_to_add() {
//          $user = new User();
//          $credit = 1;
//          $this->assertTrue($user->validCreditToAdd($credit));
//      }

//    public function is_valid_credit_to_add() {
//        $user = new User();
//        $credit = -1;
//        $this->assertFalse($user->validCreditToAdd($credit));
//    }
}
