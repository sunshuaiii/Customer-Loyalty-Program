<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportStaff extends Model
{
    use HasFactory;

    public function getUser(){
        return $this->belongsTo(User::class);
    }

    public function getTickets(){
        return $this->hasMany(Ticket::class);
    }
}
