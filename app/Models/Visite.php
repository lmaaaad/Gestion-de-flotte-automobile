<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{

    protected $fillable = [
        'vehicule_id' ,'date', 'prochaine' ,'rappel', 'wilaya_id'
    ];

    Public function vehicule()
    {
        return $this -> belongsTo('App\Models\Vehicule');
    }
    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }
    use HasFactory;
}
