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
    
    
            $taxes=Taxe::where('Wilaya',$user->Wilaya)->get();
            }else {
                $taxes=Taxe::all();

             }
        return view('gestionv.taxes.index', ['taxes' => $taxes ,'wilaya' => Wilaya::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionv.taxes.create', ['vehicules' => Vehicule::all()]);
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
            'Wilaya' => 'required',
           
  
        ]);
        
         
        $taxe=Taxe::create($validatedData);
        //$taxe->roles()->sync($request->roles);

        $request->session()->flash('success','Vous avez cree un Taxe');

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
            'taxe' =>Taxe::find($id) 
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
        $request->session()->flash('success',"Vous avez modifie les informations d'un taxe");
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
        $request->session()->flash('success','Vous avez supprime un Taxe');
        return redirect(route('gestionv.taxes.index')); 
    }
}
