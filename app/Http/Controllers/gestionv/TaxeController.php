<?php

namespace App\Http\Controllers\gestionv;

use App\Http\Controllers\Controller;
use App\Models\Taxe;
use App\Models\Vehicule;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class TaxeController extends Controller
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
    
    
            $taxes=Taxe::where('wilaya_id',$user->wilaya->id)->get();
            }else {
                $taxes=Taxe::all();
                if(request()->has('wilaya_id'))
                {
                $taxes=Taxe::where('wilaya_id',request()->wilaya_id)->get();
                }
             }
        return view('gestionv.taxes.index', ['taxes' => $taxes ,'wilayas' => Wilaya::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionv.taxes.create', ['vehicules' => Vehicule::all(), 'wilayas' => Wilaya::all(),]);
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
            'nom' => 'required|max:50',
            'date' => 'required',
            'expire' => 'required',
            'rappel' => 'required',
            'wilaya_id' => 'required',           
  
        ]);
        
         
        $taxe=Taxe::create($validatedData);
        //$taxe->roles()->sync($request->roles);

        $request->session()->flash('success','Conducteur effectué avec succès');

        return redirect(route('gestionv.taxes.index'));
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
        
        return view('gestionv.taxes.edit',
        [
            'vehicules'=>Vehicule::all() ,
            'taxe' =>Taxe::find($id) ,
            'wilayas' => Wilaya::all(),
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
        $taxe = Taxe::find($id);
        $taxe->update($request->except(['_token']));
        $request->session()->flash('success',"Conducteur modifiée avec Succès");
        return redirect(route('gestionv.taxes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Taxe::destroy($id);
        $request->session()->flash('success','Conducteur Supprimé !!');
        return redirect(route('gestionv.taxes.index')); 
    }
}
