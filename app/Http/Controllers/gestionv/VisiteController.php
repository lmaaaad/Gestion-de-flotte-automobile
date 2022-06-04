<?php

namespace App\Http\Controllers\gestionv;

use App\Http\Controllers\Controller;
use App\Models\Vehicule;
use App\Models\Visite;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class VisiteController extends Controller
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
    
    
            $visites=Visite::where('Wilaya',$user->Wilaya)->get();
            }else {
                $visites=Visite::all();
                if(request()->has('wilaya_id'))
                {
                   
                    $visites=Visite::where('wilaya_id',request()->wilaya_id)->get();
                }

             }
        return view('gestionv.visites.index', ['visites' => $visites ,'wilayas' => Wilaya::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionv.visites.create', ['vehicules' => Vehicule::all(),'wilayas' => Wilaya::all()]);
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
            'vehicule_id' =>'required',
            'date' => 'required',
            'prochaine' => 'required',
            'rappel' => 'required',
            'wilaya_id' => 'required',
           
        ]);
         
        $visite=Visite::create($validatedData);

        //$visite->roles()->sync($request->roles);

        $request->session()->flash('success','Visite Technique ajoutée avec succès');

        return redirect(route('gestionv.visites.index'));
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
        return view('gestionv.visites.edit',
        [
            'vehicules'=>Vehicule::all() ,
            'visite' =>Visite::find($id) ,
            'wilayas' => Wilaya::all()

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
        $visite = Visite::find($id);
        $visite->update($request->except(['_token']));
        $request->session()->flash('success',"Visite Technique modifiée avec Succès");
        return redirect(route('gestionv.visites.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Visite::destroy($id);
        $request->session()->flash('success','Visite Technique Supprimée !!');
        return redirect(route('gestionv.visites.index')); 
    }
}
