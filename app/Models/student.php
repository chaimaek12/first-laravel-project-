<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
 
    protected $fillable = [
    'name',
    'age',
    'class',
'email',
    'phone',
    'school',
    'gender',
    'english_level',
    'campus',
    'terms'
];
}
