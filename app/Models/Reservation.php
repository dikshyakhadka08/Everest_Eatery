<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "reservation";
    protected $fillable = ['name', 'email', 'phone', 'guest', 'date', 'time', 'message']; // Fixed field names
    
    use HasFactory;
}
