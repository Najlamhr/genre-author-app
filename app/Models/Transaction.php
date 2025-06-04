<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['order_number', 'total_amount', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}