<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entretien;

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
public function entretiens()
{
    return $this->belongsToMany('App\Models\Entretien');
}
public function wilaya()
{
    return $this->belongsTo('App\Models\Wilaya');
}



}
