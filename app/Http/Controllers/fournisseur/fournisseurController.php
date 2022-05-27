<?php

namespace App\Http\Controllers\fournisseur;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use Illuminate\Http\Request;


class fournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pieces.fournisseurs.index', ['fournisseurs' => Fournisseur::paginate(1000)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pieces.fournisseurs.create', ['fournisseurs' => Fournisseur::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $validatedData = $request->validate([

            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'ville' => 'required|min:3|max:20',
            'tel' => 'required|size:10',
            'type' => 'required',
            'NRC' => 'required|size:15',
            'NIF' => 'required|size:15',
            'Ncontrat' => 'required|max:50',
            'datedeb' => 'required',
            'datefin' => 'required',
        ]);

         
        $fournisseur=Fournisseur::create($validatedData);

        //$fournisseur->roles()->sync($request->roles);

        $request->session()->flash('success','Fournisseur Ajouté avec succès');

        return redirect(route('pieces.fournisseurs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur=Fournisseur::find($id);
      return view('pieces.fournisseurs.show',compact('fournisseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $fournisseur=Fournisseur::find($id);
      return view('pieces.fournisseurs.edit',compact('fournisseur'));
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
        $fournisseur = Fournisseur::find($id);
        $fournisseur->update($request->except(['_token']));
        //$fournisseur->roles()->sync($request->roles);
        $request->session()->flash('success','Fournisseur Modifié avec succès');
        return redirect(route('pieces.fournisseurs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Fournisseur::destroy($id);
        $request->session()->flash('success','Fournisseur Supprimé !!');
        return redirect(route('pieces.fournisseurs.index')); 
    }
}
