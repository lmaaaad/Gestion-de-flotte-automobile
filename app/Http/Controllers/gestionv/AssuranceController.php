<?php

namespace App\Http\Controllers\gestionv;

use App\Http\Controllers\Controller;
use App\Models\Assurance;
use App\Models\Fournisseur;
use App\Models\Vehicule;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class AssuranceController extends Controller
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
    
    
            $assurances=Assurance::where('wilaya_id',request()->wilaya_id)->get();
            }else {
                $assurances=Assurance::all();
                if(request()->has('wilaya_id'))
                {
                $assurances=Assurance::where('wilaya_id',request()->wilaya_id)->get();
                }
             }

        return view('gestionv.assurances.index', ['assurances' =>  $assurances , 'wilayas' => Wilaya::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionv.assurances.create', ['vehicules' => Vehicule::all(),'wilayas' => Wilaya::all(),'fournisseurs' => Fournisseur::all()]);

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

            'date' => 'required',
            'expire' => 'required',
            'rappel' => 'required',
            'vehicule_id' => 'required',
            'fournisseur_id' => 'required',
            'wilaya_id' => 'required',
                ]);
        
        $assurance=Assurance::create($validatedData);

        //$assurance->roles()->sync($request->roles);

        $request->session()->flash('success','Assurance effectué avec succès');

        return redirect(route('gestionv.assurances.index'));
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

        $assurance =Assurance::find($id);

        return view('gestionv.assurances.edit',
        [
            
            'assurance' =>$assurance,
            'vehicules'=>Vehicule::all() ,'fournisseurs' => Fournisseur::all() ,'wilayas' => Wilaya::all(),
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
        $assurance = Assurance::find($id);
        $assurance->update($request->except(['_token']));
        $request->session()->flash('success',"Assurance modifiée avec Succès");
        return redirect(route('gestionv.assurances.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Assurance::destroy($id);
        $request->session()->flash('success','Assurance Supprimé !!');
        return redirect(route('gestionv.assurances.index')); 
    }
}
