<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    protected $fillable = [
        'vehicule_id','fournisseur_id','piece_id','date','cout','discription','kilometrage',
    ];
    use HasFactory;
    public function pieces()
{
    return $this->belongsTo('App\Models\Piece');
}

    public function vehicule()
    {
        return $this->belongsTo('App\Models\Vehicule');
    }

    public function fournisseur()
    {
        return $this->belongsTo('App\Models\Fournisseur');
    }

}
