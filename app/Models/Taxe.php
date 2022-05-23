<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxe extends Model
{

    protected $fillable = [
        'nom' ,'date', 'expire' ,'rappel', 'vehicule_id',
    ];

    public function vehicule()
    {
        return $this -> belongsTo('App\Models\Vehicule');
    }
    use HasFactory;
}
