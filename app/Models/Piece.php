<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{

    protected $fillable = [
        'fournisseur_id','designation','unite','quantite','prix','date_acq','marque' ,'quantite_utiliser'
    ];


    use HasFactory;

    public function fournisseur()
{
    return $this->belongsTo('App\Models\Fournisseur');
}
public function entretien()
{
    return $this->hasMany('App\Models\Entretien');
}



}
