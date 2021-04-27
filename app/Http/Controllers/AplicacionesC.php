<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use proyecto1\Http\Requests;
use App\Models\Aplicaciones;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use DB;

class AplicacionesC extends Controller
{
    
    public function index(Request $request){
        
        $query=trim($request->get('searchText'));
        $aplicaciones=DB::table('SELECT * FROM aplicaciones');
        return view ('html.maplicaciones', ["id"=>$aplicacion, "searchText=$query"]);
    }

    public function store(){
        $aplicaciones=new Aplicaciones;
        $aplicaciones->nombre=$request->get('nombre');
        $aplicaciones->fpago=$request->get('pago');
        $aplicaciones->ndocumentos=$request->get('documentos');
        $aplicaciones->nalmacenamiento=$request->get('almacenamiento');
        $aplicaciones->nempleados=$request->get('empleados');
        $aplicaciones->save();
        return redirect()->route('html.maplicaciones') ->with('success', 'Cambios realizados con exito');

    }
   public function show($id){
        return view ("html.maplicaciones.show", ["aplicaciones" => Aplicaciones::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.maplicaciones.edit", ["aplicaciones" => Aplicaciones::findOrFail($id)]);
    }
    public function update(AplicacionesF $request, $id){
        $aplicaciones=new Aplicaciones;
        $aplicaciones->nombre=$request->get('nombre');
        $aplicaciones->fpago=$request->get('pago');
        $aplicaciones->ndocumentos=$request->get('documentos');
        $aplicaciones->nalmacenamiento=$request->get('almacenamiento');
        $aplicaciones->nempleados=$request->get('empleados');
        $aplicaciones->update();
        return redirect()->route('html.maplicaciones') ->with('success', 'Cambios realizados con exito');
    }
    public function destroy(){
        $aplicaciones=Aplicaciones::findOrFail($id);
        $aplicaciones->update();
        return redirect()->route('html.maplicaciones') ->with('success', 'Cambios realizados con exito');
    }

}
