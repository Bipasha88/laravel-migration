<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    public function customer(){
        return $this->hasOne(Customer::class);
    }

    public function location()
    {
        return $this->morphOne(Location::class, 'locationable');
    }


}
