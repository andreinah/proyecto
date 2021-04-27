<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use proyecto_form\Http\Requests;
use App\Models\Cliente;
use Illuminate\Support\Facades\Redirect;
use proyecto_form\Http\Requests\CategoriaFormRequest;
use DB;

class ClienteC extends Controller
{
    
  
    public function index(Request $request){
        $query=trim($request->get('searchText'));
        $cliente=DB::table('SELECT * FROM cliente');
        return view ('html.inputclientes', ["id"=>$clientes, "searchText=$query"]);
    }


    public function store(){
        $cliente=new Cliente;
        $cliente->proceso=$request->get('procesos');
        $cliente->subproceso=$request->get('subprocesos');
        $cliente->actividad=$request->get('iactividad');
        $cliente->sedes=$request->get('isedes');
        $cliente->maquina=$request->get('imaquina');
        $cliente->bodega=$request->get('ibodega');
        $cliente->empleado=$request->get('iempleado');
        $cliente->cargo=$request->get('icargo');
        $cliente->area=$request->get('iarea');
        $cliente->procesoempleado=$request->get('procesoempleado');
        $cliente->email=$request->get('email');
        $cliente->telefono=$request->get('telefono');
        $cliente->save();
        return Redirect::to('html.inputclientes');

    }
    public function show($id){
        return view ("html.inputclientes.show", ["cliente" => Cliente::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.inputclientes.edit", ["cliente" => Cliente::findOrFail($id)]);
    }
    public function update(ClienteF $request, $id){
        $cliente=Cliente::findOrFail($id);
        $cliente->proceso=$request->get('proceso');
        $cliente->subproceso=$request->get('subproceso');
        $cliente->actividad=$request->get('actividad');
        $cliente->sedes=$request->get('sedes');
        $cliente->maquina=$request->get('maquina');
        $cliente->bodega=$request->get('bodega');
        $cliente->empleado=$request->get('empleado');
        $cliente->cargo=$request->get('cargo');
        $cliente->area=$request->get('area');
        $cliente->procesoempleado=$request->get('procesoempleado');
        $cliente->email=$request->get('email');
        $cliente->telefono=$request->get('telefono');
        $cliente->update();
        return Redirect::to('html.inputclientes');
    }
    public function destroy(){
        $cliente=Cliente::findOrFail($id);
        $cliente->update();
        return Redirect::to('html.inputclientes');
    }

}
