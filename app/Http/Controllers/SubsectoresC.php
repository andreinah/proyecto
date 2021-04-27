<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use proyecto1\Http\Requests;
use proyecto1\Subsectores;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use DB;

class SubsectoresC extends Controller
{
    public function index (){
        $query=trim($request->get('searchText'));
        $users=DB::table('SELECT * FROM subsectores');
        return view ("html.msubsectores", ["id"=>$sector, "searchText=$query"]);
       }
    public function store(){
        $subsectores=new Subsectores;
        $subsectores->nombre=$request->get('nombre');
        $subsectores->save();
        return Redirect::to('html.msubsectores');

    }
    public function show($id){
        return view ("html.msubsectores.show", ["subsectores" => Subsectores::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.msubsectores.edit", ["subsectores" => Subsectores::findOrFail($id)]);
    }
    public function update(SubsectoresF $request, $id){
        $subsectores=Subsectores::findOrFail($id);
        $subsectores->nombre=$request->get('nombre');
        $subsectores->update();
        return Redirect::to('html.msubsectores');
    }
    public function destroy(){
        $subsectores=Subsectores::findOrFail($id);
        $subsectores->update();
        return Redirect::to('html.msubsectores');
    }
}
