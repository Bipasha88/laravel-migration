<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    public function supplier(){
        return $this->hasOne(Supplier::class);
    }

    public function location()
    {
        return $this->morphOne(Location::class, 'locationable');
    }


}
