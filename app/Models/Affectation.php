<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $fillable = [
        'conducteur_id','date','depart','arrivee','date_retour', 'affecte_par'
    ];



    use HasFactory;

    public function conducteur()
{
    return $this->belongsTo('App\Models\Conducteur');
}

}