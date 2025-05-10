<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Resources\lang\en\validation;
use App\Models\productos;
use Illuminate\Support\Facades\Session;


class ProductosController extends Controller
{
    public function login(){
        return view('login');
    }

    public function eloquent(){
        $consulta = productos::all();

        return $consulta;
    }

    public function reporteproductos(){
        $consulta = productos::select(['idproducto', 'nombreproducto', 'descripcion', 'precio', 'cantidadinventario'])
        ->get();

        return view('reporteproductos')
        ->with('consulta', $consulta);
    }

    public function altaproductos(){
        /* $productos = new productos;
        $productos -> nombreproducto = "producto 3";
        $productos -> descripcion = "Esto es una descripcion 3";
        $productos -> precio = 18.50;
        $productos -> cantidadinventario = 85;
        $productos -> save(); */
        $consulta = productos::orderBy('idproducto', 'DESC')
                                        ->take(1)
                                        ->get();
        $cuantos = count($consulta);
        if($cuantos == 0){
            $idesigue = 1;
        }else{
            $idesigue = $consulta[0]->idproducto + 1;
        }
        return view('altaproductos')
        ->with('idesigue', $idesigue);
    }

    public function guardarproducto(Request $request){
        /* dd($request); */
        $request -> validate([
            'idproducto' => 'required',
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'cantidadInventario' => 'required|integer',
        ]);

        $productos = new productos;
        $productos->idproducto = $request -> idproducto;
        $productos->nombreproducto = $request -> nombre;
        $productos->precio = $request -> precio;
        $productos->descripcion = $request -> descripcion;
        $productos->cantidadInventario = $request -> cantidadInventario;
        $productos->save();

        Session::flash('mensaje', "El producto $request->nombre ha sido dado de alta correctamente");
        return redirect()->route('reporteproductos');
    }

    public function modificaproducto($idproducto){
        $consulta = productos::select(['idproducto', 'nombreproducto', 'descripcion', 'precio', 'cantidadinventario'])
        -> where('idproducto', $idproducto)
        -> get();

        return view('modificaproducto')
                -> with('consulta', $consulta[0]);
    }

    public function guardarcambios(Request $request){
        $request -> validate([
            'idproducto' => 'required',
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'cantidadInventario' => 'required|integer',
        ]);

        $productos = productos::find($request->idproducto);
        $productos->idproducto = $request -> idproducto;
        $productos->nombreproducto = $request -> nombre;
        $productos->precio = $request -> precio;
        $productos->descripcion = $request -> descripcion;
        $productos->cantidadInventario = $request -> cantidadInventario;
        $productos->save();

        Session::flash('mensaje', "El producto $request->nombre ha sido modificado correctamente");
        return redirect()->route('reporteproductos');
    }

    public function eliminaproducto($idproducto){
        $consulta = productos::find($idproducto);
        $consulta->delete();

        Session::flash('mensaje', "El producto ha sido eliminado correctamente");
        return redirect()->route('reporteproductos');
    }
}
