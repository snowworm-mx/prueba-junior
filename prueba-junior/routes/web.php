<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
/* Route::get('/', function () {
    return view('welcome');
}); */

route::get('login',[UsuariosController::class,'login'])->name('login');
route::post('validarlogin',[UsuariosController::class,'validarlogin'])->name('validarlogin');
route::get('registrousuario',[UsuariosController::class,'registrousuario'])->name('registrousuario');
route::get('cerrarsesion',[UsuariosController::class,'cerrarsesion'])->name('cerrarsesion');

route::get('eloquent',[ProductosController::class,'eloquent'])->name('eloquent');
route::get('reporteproductos',[ProductosController::class,'reporteproductos'])->name('reporteproductos');
route::get('altaproductos',[ProductosController::class,'altaproductos'])->name('altaproductos');
route::post('guardarproducto',[ProductosController::class,'guardarproducto'])->name('guardarproducto');
route::get('modificaproducto/{idproducto}',[ProductosController::class,'modificaproducto'])->name('modificaproducto');
route::post('guardarcambios',[ProductosController::class,'guardarcambios'])->name('guardarcambios');
route::get('eliminaproducto/{idproducto}',[ProductosController::class,'eliminaproducto'])->name('eliminaproducto');

