<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingStaff extends Model
{
    use HasFactory;

    public function getUser(){
        return $this->belongsTo(User::class);
    }

    public function getLeads(){
        return $this->hasMany(Lead::class);
    }
}
