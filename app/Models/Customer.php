<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function getUser(){
        return $this->belongsTo(User::class);
    }

    public function getTickets(){
        return $this->hasMany(Tickets::class);
    }

    public function getCheckouts(){
        return $this->hasMany(Checkout::class);
    }

    public function getCoupons(){
        return $this->hasMany(Coupon::class);
    }
}
