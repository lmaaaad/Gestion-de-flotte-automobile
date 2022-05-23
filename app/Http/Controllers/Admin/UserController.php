<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies("logged-in")){
            dd('no access alowed');
        }

     if(Gate::allows('is-admin')){   
     return view('admin.users.index', ['users' => User::paginate(1000)]);
     }
     dd('No Acces Allowed');
    }
    
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create',['roles'=>Role::all()]);
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

            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'Wilaya' => 'max:30',
            'role_id' => 'required'
        ]);

        
        $validatedData['password']=bcrypt($validatedData['password']);
        $user=User::create($validatedData);

        //$user->roles()->sync($request->roles);

        $request->session()->flash('success','You have created The User');

        return redirect(route('admin.users.index'));
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
        return view('admin.users.edit',
        [
            'roles'=>Role::all(),
            'user' =>User::find($id)
    
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
        $user = User::find($id);
        if(!$user)
        {
            $request->session()->flash('error','you cannot Edit this user');
            return redirect(route('admin.users.index')); 

        }

        $user->update($request->except(['_token']));
        //$user->roles()->sync($request->roles);

        $request->session()->flash('success','You have Edited The User');


        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request )
    {
        User::destroy($id);
        $request->session()->flash('success','You have deleted The User');
        return redirect(route('admin.users.index')); 

       }
}
