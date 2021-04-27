<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use proyecto1\Http\Requests;
use proyecto1\Mclientes;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use DB;

class MclientesC extends Controller
{


    public function index(Request $request){
        $query=trim($request->get('searchText'));
        $users=DB::table('SELECT * FROM mclientes');
        return view ("html.mclientes", ["id"=>$clientes, "searchText=$query"]);
    }

    public function store(){
        $mclientes=new Mclientes;
        $mclientes->fecha=$request->get('fecha');
        $mclientes->logo=$request->get('logo');
        $mclientes->nit=$request->get('nit');
        $mclientes->rsocial=$request->get('rsocial');
        $mclientes->empresa=$request->get('empresa');
        $mclientes->actividad=$request->get('actividad');
        $mclientes->direccion=$request->get('direccion');
        $mclientes->url=$request->get('url');
        $mclientes->telefono=$request->get('telefono');
        $mclientes->sector=$request->get('sector');
        $mclientes->subsector=$request->get('subsector');
        $mclientes->pais=$request->get('pais');
        $mclientes->departamento=$request->get('departamento');
        $mclientes->ciudad=$request->get('ciudad');
        $mclientes->barrio=$request->get('barrio');
        $mclientes->nempleados=$request->get('nempleados');
        $mclientes->contacto=$request->get('contacto');
        $mclientes->tlfcontacto=$request->get('tlfcontacto');
        $mclientes->email=$request->get('email');
        $mclientes->asesor=$request->get('asesor');
        $mclientes->plazo=$request->get('plazo');
        $mclientes->cupo=$request->get('cupo');
        $mclientes->estado=$request->get('estado');
        $mclientes->usuario=$request->get('usuario');
        $mclientes->pass=$request->get('pass');
        $mclientes->save();
        return Redirect::to('html.mclientes');

    }
    public function show($id){
        return view ("html.mclientes.show", ["mclientes" => Mclientes::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.mclientes.edit", ["mclientes" => Mclientes::findOrFail($id)]);
    }
    public function update(MclientesF $request, $id){
        $mclientes=Mclientes::findOrFail($id);
        $mclientes->fecha=$request->get('fecha');
        $mclientes->logo=$request->get('logo');
        $mclientes->nit=$request->get('nit');
        $mclientes->rsocial=$request->get('rsocial');
        $mclientes->empresa=$request->get('empresa');
        $mclientes->actividad=$request->get('actividad');
        $mclientes->direccion=$request->get('direccion');
        $mclientes->url=$request->get('url');
        $mclientes->telefono=$request->get('telefono');
        $mclientes->sector=$request->get('sector');
        $mclientes->subsector=$request->get('subsector');
        $mclientes->pais=$request->get('pais');
        $mclientes->departamento=$request->get('departamento');
        $mclientes->ciudad=$request->get('ciudad');
        $mclientes->barrio=$request->get('barrio');
        $mclientes->nempleados=$request->get('nempleados');
        $mclientes->contacto=$request->get('contacto');
        $mclientes->tlfcontacto=$request->get('tlfcontacto');
        $mclientes->email=$request->get('email');
        $mclientes->asesor=$request->get('asesor');
        $mclientes->plazo=$request->get('plazo');
        $mclientes->cupo=$request->get('cupo');
        $mclientes->estado=$request->get('estado');
        $mclientes->usuario=$request->get('usuario');
        $mclientes->pass=$request->get('pass');
        $mclientes->update();
        return Redirect::to('html.mclientes');
    }
    public function destroy(){
        $mclientes=Mclientes::findOrFail($id);
        $mclientes->update();
        return Redirect::to('html.mclientes');
    }
}
