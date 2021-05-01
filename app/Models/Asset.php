<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public function assetCategory(){
        return $this->hasOne(AssetCategory::class);
    }

    public function location()
    {
        return $this->morphOne(Location::class, 'locationable');
    }
    public function payment()
    {
        return $this->morphOne(Location::class, 'paymentable');
    }
}
