<?php

namespace App\Http\Controllers\gestionv;

use App\Http\Controllers\Controller;
use App\Models\Conducteur;
use App\Models\Vehicule;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $user=auth()->user();
        if ($user->hasRole('dupw')) {
    
    
        $vehicules=vehicule::where('Wilaya',$user->Wilaya)->get();
        }else {
            $vehicules=Vehicule::all();
         }

        return view('gestionv.vehicules.index', [
            'vehicules' => $vehicules, 'wilaya' => Wilaya::all()
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionv.vehicules.create', ['conducteurs' => Conducteur::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $validatedData = $request->validate([

            'Matricule' => 'required|max:255',
            'Marque' => 'required|max:255',
            'Modele' => 'required|min:3|max:30',
            'Couleur' => 'required',
            'Num_serie' => 'required',
            'Date_ms' => 'required',
            'Type' => 'required',
            'Carburant' => 'required',
            'Etat_Actuel' => 'required',
            'Wilaya' => 'required',
        ]);
         
        $vehicule=Vehicule::create($validatedData);

        //$vehicule->roles()->sync($request->roles);

        $request->session()->flash('success','Vous avez cree un Vehicule');

        return redirect(route('gestionv.vehicules.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicule=Vehicule::find($id);
      return view('gestionv.vehicules.show',compact('vehicule'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicule=Vehicule::find($id);
      return view('gestionv.vehicules.edit',compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->update($request->except(['_token']));
        $request->session()->flash('success',"Vous avez modifie les informations d'un vehicule");
        return redirect(route('gestionv.vehicules.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Vehicule::destroy($id);
        $request->session()->flash('success','Vous avez supprime un Vehicule');
        return redirect(route('gestionv.vehicules.index')); 
    }
}
