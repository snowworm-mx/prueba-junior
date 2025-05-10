<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\usuarios;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuariosController extends Controller
{
    public function login(){
        return view('login');
    }

    public function validarlogin(Request $request){
        $request -> validate([
            'usuario' => 'required',
            'password' => 'required',
        ]);

        $consulta = usuarios::where('usuario', $request->usuario)
                            /* ->where('activo', '1') */
                            ->get();

        $cuantos = count($consulta);

        if($cuantos == 1 and hash::check($request->password, $consulta[0]->password)){
            Session::put('sessionusuario', $consulta[0]->usuario);
            return redirect()->route('reporteproductos');
        }else{
            /* echo "Accesso no permitido"; */
            Session::flash('mensaje', "El usuario o la contraseña no son validas.");
            return redirect()->route('login');
        }

    }

    public function registrousuario(){
        return view('registrousuario');
/*     Para hacer el cifrado de las contraseñas
 */     /* $passwordCifrada = Hash::make("alan123");
        echo "$passwordCifrada"; */
    }

    public function cerrarsesion(){

    }
}
