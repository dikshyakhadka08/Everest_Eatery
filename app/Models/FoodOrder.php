<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    Protected $fillable = ['id', 'foodname', 'price','username','quantity','phone','address'];
   
    use HasFactory;

}
