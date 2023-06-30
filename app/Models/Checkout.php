<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    public function getCustomer(){
        return $this->belongsTo(Customer::class);
    }

    public function getCustomerCoupon(){
        return $this->belongsTo(CustomerCoupon::class);
    }

    public function getProducts(){
        return $this->hasMany(Product::class);
    }
}
