<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
