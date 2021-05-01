<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function invoiceItem(){
        return $this->hasOne(InvoiceItem::class);
    }
    public function customer(){
        return $this->hasOne(Customer::class);
    }
    public function saleReturn(){
        return $this->belongsTo(SaleReturn::class);
    }
}
