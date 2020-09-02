<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Grupos;
use App\Listas;
use App\Clases;


use Illuminate\Http\Request;

class AlumnosController extends Controller
{
  
    public function create(Grupos $grupos)
    {
        
        return view('alumnos.create',compact('grupos'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */

    public function show(Alumnos $alumnos)
    {
        return view('alumnos.show', compact('alumnos'));
    }


    public function store(Request $request, Grupos $grupos)
    {
         

         $listas = new Listas;
            $clases = new Clases;
            $clases->save();
            $listas->clases_id=$clases->id;
            $listas->grupos_id=$grupos->id;
            $listas->save();
         $alumno = new Alumnos;
         
        if($archivo=$request->file('ruta_foto')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);

            
            $alumno->ruta_foto=$nombre;
        }else{

        }

            $alumno->name=$request->name;
            $alumno->primer_apellido=$request->primer_apellido;
            $alumno->segundo_apellido=$request->segundo_apellido;
            $alumno->nocontrol=$request->nocontrol;
            $alumno->email=$request->email;
            $alumno->carrera=$request->carrera;
            $alumno->semestre=$request->semestre;
            $alumno->tel=$request->tel;
            $alumno->edad=$request->edad;

            if($request->representativo == 1){
            $alumno->representativo=$request->representativo;
            }else{
             $alumno->representativo=0;   
            }


            if($request->discapacidad == 1){
            $alumno->discapacidad=$request->discapacidad;
            }else{
                $alumno->discapacidad=0;
            }
            $alumno->sexo=$request->sexo;
            
            $alumno->listas_id=$listas->id;
            $alumno->save();

            



           return redirect()->route('grupos.show', $grupos->id)
        ->with('info', 'Alumno creado con exito');
       // ->with('info', 'Alumno actualizado con exito');
    }
        
       
        
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumnos $alumnos)
    {
        
        return view('alumnos.edit', compact('alumnos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //actualizar usuario
 
       
         
         
        if($archivo=$request->file('ruta_foto')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);

            
            $alumnos->ruta_foto=$nombre;
        }else{

        }

            $alumnos->name=$request->name;
            $alumnos->primer_apellido=$request->primer_apellido;
            $alumnos->segundo_apellido=$request->segundo_apellido;
            $alumnos->nocontrol=$request->nocontrol;
            $alumnos->email=$request->email;
            $alumnos->carrera=$request->carrera;
            $alumnos->semestre=$request->semestre;
            $alumnos->tel=$request->tel;
            $alumnos->edad=$request->edad;

            if($request->representativo == 1){
            $alumnos->representativo=$request->representativo;
            }else{
             $alumnos->representativo=0;   
            }
           // return $alumnos->representativo;

            if($request->discapacidad == 1){
            $alumnos->discapacidad=$request->discapacidad;
            }else{
                $alumnos->discapacidad=0;
            }
            $alumnos->sexo=$request->sexo;
            
            $alumnos->save();
        return redirect()->route('alumnos.edit', $alumnos->id)
        ->with('info', 'Alumno actualizado con exito');
        
        //actualizar rol usuario

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnos $alumno)
    {
        $alumno->delete();
        return back()->with('info', 'Eliminado correctamente');

    }
}
