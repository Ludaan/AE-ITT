<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('nombre',"id");
        
        

        return view('admin.users.edit', compact('user','roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //actualizar usuario
 
        $entrada=$request->all();

        if($archivo=$request->file('ruta_foto')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $user->ruta_foto=$nombre;
             $user->name=$request->name;
            $user->email=$request->email;
            $user->tel=$request->tel;
            $user->role_id=$request->role_id;
            $user->edad=$request->edad;
             $user->nocontrol=$request->nocontrol;
            
            $user->save();
            return redirect()->route('admin.users.edit', $user->id)
        ->with('info', 'Usuario actualizado con exito');
        }else{
        
        $user->update($entrada);
        return redirect()->route('admin.users.edit', $user->id)
        ->with('info', 'Usuario actualizado con exito');
        }
        //actualizar rol usuario

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info', 'Eliminado correctamente');

    }
}
