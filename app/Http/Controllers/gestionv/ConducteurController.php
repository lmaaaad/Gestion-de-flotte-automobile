<?php

namespace App\Http\Controllers\gestionv;

use App\Http\Controllers\Controller;
use App\Models\Conducteur;
use App\Models\Vehicule;
use App\Models\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ConducteurController extends Controller
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
    
    
            $conducteurs=Conducteur::where('wilaya_id',$user->wilaya->id)->get();
            }else {
                $conducteurs=Conducteur::all();
                if(request()->has('wilaya_id'))
                {
                    $conducteurs=Conducteur::where('wilaya_id',request()->wilaya_id)->get();

                }

             }

        return view('gestionv.conducteurs.index', [
            'conducteurs' =>  $conducteurs , 'wilayas' => Wilaya::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('gestionv.conducteurs.create', ['vehicules' => Vehicule::all()]);
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

            'Nom' => 'required|max:255',
            'Prenom' => 'required|max:255',
            'tel' => 'required|size:10',
            'Adresse' => 'required|min:4|max:50',
            'vehicule_id' => 'required',
            'wilaya_id' => 'required',
        ]);
       

         
        $conducteur=Conducteur::create($validatedData);


        $request->session()->flash('success','Vous avez cree un Conducteur');

        return redirect(route('gestionv.conducteurs.index'));
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
        $conducteur=Conducteur::find($id);
      return view('gestionv.conducteurs.edit',compact('conducteur'));
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
        $conducteur = Conducteur::find($id);
        $conducteur->update($request->except(['_token']));
        $request->session()->flash('success',"Vous avez modifie les informations d'un conducteur");
        return redirect(route('gestionv.conducteurs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        
        Conducteur::destroy($id);
        $request->session()->flash('success','Vous avez supprime un Conducteur');
        return redirect(route('gestionv.conducteurs.index')); 
    }
}
