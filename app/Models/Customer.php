<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function customerGroup(){
        return $this->hasOne(CustomerGroup::class);
    }

    public function quotation(){
        return $this->belongsTo(Quotation::class);
    }
    public function saleReturn(){
        return $this->belongsTo(SaleReturn::class);
    }
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

}
