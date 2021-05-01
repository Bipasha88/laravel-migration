<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function expenseCategory(){
        return $this->hasOne(ExpenseCategory::class);
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
