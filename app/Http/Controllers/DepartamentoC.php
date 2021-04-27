<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use proyecto1\Http\Requests;
use proyecto1\Departamento;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use DB;

class DepartamentoC extends Controller
{

    public function index(Request $request){
        $query=trim($request->get('searchText'));
        $users=DB::table('SELECT * FROM departamento');
        return view ("html.mdepartamento", ["id"=>$departamento, "searchText=$query"]);
    }
  
    public function store(){
        $departamento=new Departamento;
        $departamento->nombre=$request->get('subsector');
        $departamento->idciudad=$request->get('sector');
        $departamento->save();
        return Redirect::to('html.mdepartamento');

    }
    public function show($id){
        return view ("html.mdepartamento.index", ["id" => Departamento::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.mdepartamento.index", ["id" => Departamento::findOrFail($id)]);
    }
    public function update(DepartamentoF $request, $id){
        $departamento=Departamento::findOrFail($id);
        $departamento->nombre=$request->get('nombre');
        $departamento->idciudad=$request->get('idciudad');
        $departamento->update();
        return Redirect::to('html.mdepartamento');
    }
    public function destroy(){
        $departamento=Departamento::findOrFail($id);
        $departamento->update();
        return Redirect::to('html.mdepartamento');
    }
}
