<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReturn extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->morphOne(Location::class, 'locationable');
    }
    public function customer(){
        return $this->hasOne(Customer::class);
    }
    public function invoice(){
        return $this->hasOne(Invoice::class);
    }
}
