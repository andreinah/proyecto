<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use proyecto1\Http\Requests;
use proyecto1\Sectores;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use DB;

class SectoresC extends Controller
{
   public function index (){
    $query=trim($request->get('searchText'));
    $users=DB::table('SELECT * FROM sectores');
    return view ("html.msectores", ["id"=>$sector, "searchText=$query"]);
   }

    public function store(){
        $sectores=new Sectores;
        $sectores->nombre=$request->get('nombre');
        $sectores->idsubsector=$request->get('idsubsector');
        $sectores->save();
        return Redirect::to('html.msectores');

    }
    public function show($id){
        return view ("html.msectores.show", ["id" => Sectores::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.msectores.edit", ["id" => Sectores::findOrFail($id)]);
    }
    public function update(SectoresF $request, $id){
        $sectores=Sectores::findOrFail($id);
        $sectores->nombre=$request->get('nombre');
        $sectores->idsubsector=$request->get('idsubsector');
        $sectores->update();
        return Redirect::to('html.msectores');
    }
    public function destroy(){
        $sectores=Sectores::findOrFail($id);
        $sectores->update();
        return Redirect::to('html.msectores');
    }
}
