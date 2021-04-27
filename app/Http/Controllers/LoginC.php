<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use proyecto1\Http\Requests\CategoriaFormRequest;
use App\Models\Login;
use DB;

class LoginC extends Controller
{
    

    public function index(Request $request){
        $query=trim($request->get('searchText'));
        $users=DB::table('SELECT * FROM login');
        return view ("login", ["id"=>$users, "searchText=$query"]);
    }


    public function store(){
        $login=new Login;
        $login->nombre=$request->get('regnombre');
        $login->usuario=$request->get('regusuario');
        $login->pass=$request->get('regpass');
        $login->save();
        return Redirect::to('login');

    }
    public function show($id){
        return view ("html.loginperfil.show", ["login" => Login::findOrFail($id)]);
        
    }
    public function edit(){
        return view ("html.loginperfil.edit", ["login" => Login::findOrFail($id)]);
    }
    public function update(LoginF $request, $id){
        $login=Login::findOrFail($id);
        $login->pass=$request->get('pass');
        $login->update();
        return Redirect::to('html.loginperfil');
    }
    public function destroy(){
        $login=Login::findOrFail($id);
        $login->update();
        return Redirect::to('html.loginperfil');
    }
}
