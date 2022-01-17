<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function canBook($id) {
        return ($this->isPremium() && $user->isPremium()) || !$this->isPremium();
    }
}
