<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'rooms_id',
        'start_date',
        'end_date'
    ];

    public function needAllCredit($user, $data) {
        if($user->credit == $data['total']){
            return true;
        }
        else {
            return false;
        }
    }
}
