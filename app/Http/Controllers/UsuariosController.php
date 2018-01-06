<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestNuevoUsuario;
use App\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create(){
        return view('usuarios.nuevoUsuario');
    }

    public function store(RequestNuevoUsuario $request)
    {

        $user = new User();
        $user->fill([
            "nombre"=>$request["nombre"],
            "apellido"=>$request["apellido"],
            "fechaDeNacimiento"=>$request["fechaDeNacimiento"],
            "genero"=>$request["genero"],
            "DUI"=>$request["DUI"],
            "email"=>$request["email"],
            "resetPassword"=>1,
            "password"=>bcrypt['password']
        ]);
        $user->save();

        flash('Registro Exitoso', 'success');
        return redirect()->back();
    }

}
