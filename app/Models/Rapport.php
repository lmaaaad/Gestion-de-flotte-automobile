<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $fillable = [
        'wilaya_id',
    ];
    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }
   
}
