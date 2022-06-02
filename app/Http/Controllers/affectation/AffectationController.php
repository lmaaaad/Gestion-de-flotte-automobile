<?php

namespace App\Http\Controllers\affectation;

use App\Http\Controllers\Controller;
use App\Models\Affectation;
use App\Models\Conducteur;
use App\Models\Wilaya;
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
        $user=auth()->user();
        if ($user->hasRole('dupw')) {
    
    
            $affectations=Affectation::where('wilaya_id',request()->wilaya_id)->get();
            }else {
                $affectations=Affectation::all();
                if(request()->has('wilaya_id'))
                {
                    $affectations=Affectation::where('wilaya_id',request()->wilaya_id)->get();

                }
                

             }
        
        return view('affectations.affectations.index', [
            'affectations' => $affectations ,'conducteurs'=>Conducteur::all() ,  'wilayas' => Wilaya::all(),
        ]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $affectations=Affectation::all();
        
        return view('affectations.affectations.create', [
            'affectations' => $affectations , 'conducteurs'=>Conducteur::all() ,'wilayas' => Wilaya::all(),
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
            'wilaya_id' => 'required',
        ]);
      

       // $conducteur=Conducteur::find($request->conducteur_id);
        
        
        $affectation=Affectation::create($validatedData);

        //$affectation->roles()->sync($request->roles);

        $request->session()->flash('success','Vous avez Affecté une Mission'); 

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
            'affectation' =>Affectation::find($id) ,'conducteurs'=>Conducteur::all() , 'wilayas' => Wilaya::all(),
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
        $request->session()->flash('success',"Mission modifiée avec Succès");
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
        $request->session()->flash('success','Mission Annulée');
        return redirect(route('affectations.affectations.index')); 
    }
}