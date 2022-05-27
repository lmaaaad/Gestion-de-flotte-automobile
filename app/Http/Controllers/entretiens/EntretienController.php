<?php

namespace App\Http\Controllers\entretiens;

use App\Http\Controllers\Controller;
use App\Models\Entretien;
use App\Models\Fournisseur;
use App\Models\Piece;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entretiens.entretiens.index', [
            'entretiens' => Entretien::paginate(5),'vehicule' => Vehicule::all(),'fournisseur' => Fournisseur::all() ,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entretiens.entretiens.create', [
            'entretiens' => Entretien::all(),'vehicules' => Vehicule::all(),
            'fournisseurs' => Fournisseur::all() , 'pieces' => Piece::all(),
        ]);
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

            'vehicule_id' => 'required|max:255',
            'fournisseur_id' => 'required|max:255',
            'piece_id'=>'max:255',
            'date' => 'required',
            'cout' => 'required',
            'discription' => 'required|max:255',
            'kilometrage' => 'required',
            'pieces' => 'required|array|min:1',
            'pieces.*' => 'required',
            
        ]);

         
        $entretien=Entretien::create($request->except('pieces'));
        $entretien->pieces()->sync($request->pieces);

        //$entretien->roles()->sync($request->roles);

        $request->session()->flash('success','Entretien effectué avec succès');

        return redirect(route('entretiens.entretiens.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entretiens=Entretien::find($id);
        
        return view('entretiens.entretiens.show',compact ([
            'entretiens',
            'vehicules'  => Vehicule::all() ,
            'fournisseurs' => Fournisseur::all(), 'pieces' => piece::all(),
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entretien=Entretien::find($id);
        
        return view('entretiens.entretiens.edit')->with([
            'vehicules' => Vehicule::all(), 'entretien' => $entretien, 
            'piece_ids'=> $entretien->pieces()->pluck('piece_id')->all(), 
            'fournisseurs' => Fournisseur::all() , 'pieces' => Piece::all(),
        ]);
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
        
        $entretien = Entretien::find($id);
        $entretien->update($request->except(['_token']));
        //$entretien->roles()->sync($request->roles);
        $request->session()->flash('success',"Entretien modifiée ");
        return redirect(route('entretiens.entretiens.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Entretien::destroy($id);
        $request->session()->flash('success','Entretien Supprimé !');
        return redirect(route('entretiens.entretiens.index')); 
    }
}
