<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'only_for_premium_member'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'bookings');
    }

    function canBook(User $user) {
        return (($this->isPremium() && $user->isPremium()) || !$this->isPremium());
    }

    public function isPremium() {
        return $this->only_for_premium_member;
    }


}
