<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model

{
    protected $fillable = [
        'date' ,'expire', 'rappel' ,'vehicule_id', 'fournisseur_id','wilaya_id',
    ];
    
    public function vehicule()
    {
        return $this->belongsTo('App\Models\Vehicule');
    }

    public function fournisseur()
    {
        return $this->belongsTo('App\Models\Fournisseur');
    }
    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }
    use HasFactory;
}
