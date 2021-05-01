<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function  unit(){
        return $this->hasOne( Unit::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }

    public function  brand(){
        return $this->hasOne( Brand::class);
    }

    public function vatSdGroup(){
        return $this->hasOne(VatSdGroup::class);
    }

    public function locations()
    {
        return $this->morphToMany(Location::class, 'locationable');
    }

    public function invoiceItem(){
        return $this->belongsTo(InvoiceItem::class);
    }


}
