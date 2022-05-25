<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Piece;

class Entretien extends Model
{
    protected $fillable = [
        'vehicule_id','fournisseur_id','date','cout','discription','kilometrage',
    ];
    use HasFactory;
    public function pieces()
{
    return $this->belongsToMany('App\Models\Piece');
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
