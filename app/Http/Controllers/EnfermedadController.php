<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enfermedad;

class EnfermedadController extends Controller
{
     /** INDEX */
     public function index()
     { 
         $enfermedad=Enfermedad::latest()->where('patient_id','=',auth()->user()->id)->paginate(10);
      return view('enfermedad.index',compact('enfermedad'));
     }
  
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('enfermedad.create');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
        Enfermedad::create(
             $request->only('fecha_diagnostico','nombre','descripcion') +
             [
                 'patient_id'=>auth()->user()->id
         ] 
         );
 
         $notification='La Enfermedad se ha registrado correctamente';
         return redirect('/enfermedad')->with(compact('notification'));
         //return back()->with('notification', 'El medico se ha registrado correctamente');
 
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
 
     /*mostrar oara editar
      */
     public function edit(Enfermedad $enfermedad)
     {
      return view('enfermedad.edit',compact('enfermedad'));
     }
 
     /**
      Actualizar
      */
     public function update(Request $request, Enfermedad $enfermedad)
     {
           
         $data=$request->only('fecha_diagnostico','nombre','descripcion');
         
         $data['patient_id']=auth()->user()->id;

         $enfermedad->fill($data);
         $enfermedad->save();//UPDATE guardar cambios
 
         $notification='La informacion de la enfermedad se ha actualizado correctamente';
         return redirect('/enfermedad')->with(compact('notification'));
     }
 
     /*ELIMINAR */
     public function destroy(Enfermedad $enfermedad)
     {      
         $enfermedad->delete();
         $notification="se ha eliminado correctamente";
         return redirect('/enfermedad')->with(compact('notification'));
 
     }
}
