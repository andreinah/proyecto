<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use proyecto1\Http\Requests;
use App\Models\Ciudades;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use DB;

class CiudadesC extends Controller
{
 
    public function index(Request $request){
        $query=trim($request->get('searchText'));
        $users=DB::table('SELECT * FROM ciudades');
        return view ("html.mciudades", ["id"=>$ciudad, "searchText=$query"]);
    }


    public function store(){
        $ciudades=new Ciudades;
        $ciudades->nombre=$request->get('ciudad');
        $ciudades->save();
        return Redirect::to('html.mciudades');

    }

    public function show($id){
        return view ("html.mciudades.show", ["ciudades" => Ciudades::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.mciudades.edit", ["ciudades" => Ciudades::findOrFail($id)]);
    }
    public function update(CiudadesF $request, $id){
        $ciudades=Ciudades::findOrFail($id);
        $ciudades->nombre=$request->get('nombre');
        $ciudades->update();
        return Redirect::to('html.mciudades');
    }

    public function destroy(){
        $ciudades=Ciudades::findOrFail($id);
        $ciudades->update();
        return Redirect::to('html.mciudades');
    }
}
