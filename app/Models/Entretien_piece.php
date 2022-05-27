<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien_piece extends Model
{
    protected $fillable = [
        'entretien_id','piece_id'
    ];
    use HasFactory;
}
