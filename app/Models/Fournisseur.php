<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    
    protected $fillable = [
        'name','type','ville','tel','email','NRC','NIF','Ncontrat','datedeb','datefin',
    ];


    use HasFactory;

    public function pieces()
{
    return $this->hasMany('App\Models\Piece');
}

public function entretien()
{
    return $this->hasMany('App\Models\Entretien');
}

public function assurance()
{
    return $this->hasMany('App\Models\Assurance');
}
}
