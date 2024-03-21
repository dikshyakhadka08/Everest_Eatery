<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    Protected $fillable = ['customerId', 'foodId', 'quantity'];
    use HasFactory;
}
