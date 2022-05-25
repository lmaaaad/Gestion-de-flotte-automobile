<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    protected $fillable = [
        'Nom','Prenom','tel','Adresse','vehicule_id', 'Wilaya',
    ];

    

    use HasFactory;

    public function vehicule()
    {
        return $this->belongsTo('App\Models\Vehicule');
    }

    public function affectations()
    {
        return $this->hasMany('App\Models\Affectation');
    }
    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }
}
