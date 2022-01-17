<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{
    public function rooms() {
        $rooms = Room::all();
        return view('home')->with('rooms', $rooms);
    }
}
