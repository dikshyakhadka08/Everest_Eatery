<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    Protected $fillable = ['name', 'chefskill', 'image'];
    use HasFactory;
}
