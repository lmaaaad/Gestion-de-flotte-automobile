<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searchbar extends Model
{
    protected $fillable = [
        'Affectation','assurance'
    ];

    use HasFactory;
}
