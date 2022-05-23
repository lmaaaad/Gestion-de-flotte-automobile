<?php

namespace App\Http\Controllers\affectation;

use App\Http\Controllers\Controller;
use App\Models\Affectation;
use App\Models\Conducteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('affectations.affectations.index', [
            'affectations' => Affectation::paginate(1000) ,'conducteur'=>Conducteur::all() 
        ]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('affectations.affectations.create', [
            'affectations' => Affectation::all() , 'conducteurs'=>Conducteur::all() ,
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

            'conducteur_id' => 'required|max:255',
            'date' => 'required',
            'date_retour' => 'required',
            'depart' => 'required',
            'arrivee' => 'required',
            'affecte_par' =>'required',
        ]);
      

       // $conducteur=Conducteur::find($request->conducteur_id);
        
        
        $affectation=Affectation::create($validatedData);

        //$affectation->roles()->sync($request->roles);

        $request->session()->flash('success','Vous avez cree une Affectation');

        return redirect(route('affectations.affectations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('affectations.affectations.edit',
        [
            'affectation' =>Affectation::find($id) ,'conducteurs'=>Conducteur::all() ,
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
        
        $affectation = Affectation::find($id);
        $affectation->update($request->except(['_token']));
        //$affectation->roles()->sync($request->roles);
        $request->session()->flash('success',"Vous avez modifie les informations d'une Affectation");
        return redirect(route('affectations.affectations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Affectation::destroy($id);
        $request->session()->flash('success','Vous avez supprime une Affectation');
        return redirect(route('affectations.affectations.index')); 
    }
}