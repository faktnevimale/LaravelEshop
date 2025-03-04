<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
      'ID', 'discount', 'name', 'email', 'address', 'phoneNumber'
    ];
}
