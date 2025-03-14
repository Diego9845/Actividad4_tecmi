<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHero extends Model
{
    use HasFactory;

    protected $table = 'superhero';

    protected $fillanle = [
        'gender_id',
        'real_name'
    ];
}
