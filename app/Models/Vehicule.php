<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = [
        'Matricule' ,'Marque', 'Modele' ,'Etat_Actuel', 'Couleur', 'Num_serie', 'Date_ms', 'Type' ,'Carburant' , 'Wilaya',
    ];
    
    use HasFactory;

    public function conducteur()
    {
        return $this->hasOne('App\Models\Conducteur');
    }

    public function assurance()
    {
    return $this->hasOne('App\Models\Assurance');
    }

    public function taxe()
    {
    return $this->hasOne('App\Models\Taxe');
    }

    public function visite()
    {
    return $this->hasOne('App\Models\Visite');
    }

    public function entretien()
    {
        return $this->HasOne('App\Models\Entretien');
    }

}
  

