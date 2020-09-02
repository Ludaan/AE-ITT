<?php

namespace App\Http\Controllers;

use App\Grupos;
use App\Horarios;
use App\Activities;
use App\User;
use App\Alumnos;
use App\Listas;
use App\Clases;

use Illuminate\Http\Request;

class gruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gruposdeportiva = Grupos::whereHas('activities', function($q){
            $q->where('tipo','Deportiva')->orderBy('nombre');
        })->get();
       
        $gruposcultural = Grupos::whereHas('activities', function($q){
            $q->where('tipo','Cultural')->orderBy('nombre');
        })->get();
        $gruposcivica = Grupos::whereHas('activities', function($q){
            $q->where('tipo','Civica')->orderBy('nombre');
        })->get();

        return view('grupos.index', compact('gruposdeportiva','gruposcivica','gruposcultural'));
    }

    public function clase(Clases $clases){


        return view('grupos.clase',compact('clases'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $user = User::pluck('name',"id");
        $activities = Activities::pluck('nombre',"id");

       

        return view('grupos.create', compact('user','activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $grupos = new Grupos;
        $grupos->activities_id = $request->activities_id;
        $grupos->user_id = $request->user_id;
        $grupos->anio = $request->anio;
        $grupos->periodo = $request->periodo;

        $horarios=Horarios::create(['lunes'=>$request->lunes,
            'martes'=>$request->martes,
            'miercoles'=>$request->miercoles,
            'jueves'=>$request->jueves,
            'viernes'=>$request->viernes]);

        $grupos->horarios_id = $horarios->id;
        $grupos->save();



        return redirect()->route('grupos.edit',$grupos->id)
        ->with('info', 'Grupo guardada con exito');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\grupos  $gruposs
     * @return \Illuminate\Http\Response
     */
    public function show(Grupos $grupos)
    {
        
        $id= $grupos->id;

        $alumnos = Alumnos::whereHas('listas', function($q)use($id){
            $q->where('grupos_id',"=",$id);
        })->orderBy('name')->get();

        

     
        
        return view('grupos.show', compact('grupos','alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grupos  $gruposs
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupos $grupos)
    {
                
         $user = User::pluck('name',"id");
        $activities = Activities::pluck('nombre',"id");


        return view('grupos.edit', compact('grupos','user','activities'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grupos  $gruposs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupos $grupos)
    {
        //actualizar usuario
 
        $grupos->activities_id = $request->activities_id;
        $grupos->user_id = $request->user_id;
        $grupos->anio = $request->anio;
        $grupos->periodo = $request->periodo;

        //actualizacion de horarios
        $horarios=$grupos->horarios;
        $horarios->lunes=$request->lunes;
        $horarios->martes=$request->martes;
        $horarios->miercoles=$request->miercoles;
        $horarios->jueves=$request->jueves;
        $horarios->viernes=$request->viernes;
        $horarios->save();
        //////////////////////////////////
        $grupos->horarios_id = $horarios->id;

        $grupos->save();


        return redirect()->route('grupos.edit',$grupos->id)
        ->with('info', 'Grupo guardada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grupos  $gruposs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupos $grupos)
    {
        $grupos->delete();
        return back()->with('info', 'Eliminado correctamente');

    }


    public function lista(Grupos $grupos){

         $id= $grupos->id;

         $myArr = array();

        $alumnos = Alumnos::whereHas('listas', function($q)use($id){
            $q->where('grupos_id',"=",$id);
        })->orderBy('primer_apellido')->get();
        

        return view('grupos.lista', compact('grupos','alumnos'));
    }

    public function clasestore(Request $request){

        $clases = new Clases;

        if($request->input('clase1') == 1){
        $clases->clase1 = $request->input('clase1');
        }else{
             $clases->clase1 =0;
        }
        if($request->input('clase2') == 1){
        $clases->clase2 = $request->input('clase2');
         }else{
             $clases->clase2 =0;
        }
        if($request->input('clase3') == 1){
        $clases->clase3 = $request->input('clase3');
         }else{
             $clases->clase3 =0;
        }
        if($request->input('clase4') == 1){
        $clases->clase4 = $request->input('clase4');
         }else{
             $clases->clase4 =0;
        }
        if($request->input('clase5') == 1){
        $clases->clase5 = $request->input('clase5');
         }else{
             $clases->clase5 =0;
        }
        if($request->input('clase6') == 1){
        $clases->clase6 = $request->input('clase6');
         }else{
             $clases->clase6 =0;
        }
        if($request->input('clase7') == 1){
        $clases->clase7 = $request->input('clase7');
         }else{
             $clases->clase7 =0;
        }
        if($request->input('clase8') == 1){
        $clases->clase8 = $request->input('clase8');
         }else{
             $clases->clase8 =0;
        }
        if($request->input('clase9') == 1){
        $clases->clase9 = $request->input('clase9');
         }else{
             $clases->clase9 =0;
        }
        if($request->input('clase10') == 1){
        $clases->clase10 = $request->input('clase10');
         }else{
             $clases->clase10 =0;
        }
        if($request->input('clase11') == 1){
        $clases->clase11 = $request->input('clase11');
         }else{
             $clases->clase11 =0;
        }
        if($request->input('clase12') == 1){
        $clases->clase12 = $request->input('clase12');
         }else{
             $clases->clase12 =0;
        }
        if($request->input('clase13') == 1){
        $clases->clase13 = $request->input('clase13');
         }else{
             $clases->clase13 =0;
        }
        if($request->input('clase14') == 1){
        $clases->clase14 = $request->input('clase14');
         }else{
             $clases->clase14 =0;
        }
        if($request->input('clase15') == 1){
        $clases->clase15 = $request->input('clase15');
         }else{
             $clases->clase15 =0;
        }
        if($request->input('clase16') == 1){
        $clases->clase16 = $request->input('clase16');
         }else{
             $clases->clase16 =0;
        }
        if($request->input('clase17') == 1){
        $clases->clase17 = $request->input('clase17');
         }else{
             $clases->clase17 =0;
        }
        if($request->input('clase18') == 1){
        $clases->clase18 = $request->input('clase18');
         }else{
             $clases->clase18 =0;
        }
        if($request->input('clase19') == 1){
        $clases->clase19 = $request->input('clase19');
         }else{
             $clases->clase19 =0;
        }
        if($request->input('clase20') == 1){
        $clases->clase20 = $request->input('clase20');
         }else{
             $clases->clase20 =0;
        }


        $clases->save();

    } 


    
}
