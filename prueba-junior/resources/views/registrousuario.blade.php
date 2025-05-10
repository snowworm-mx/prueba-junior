@extends('layout')

@section('contenido')

<div class="d-flex justify-content-center">
    <form action="{{ route('registrarusuario') }}" method="POST">
        {{csrf_field()}}
        <div>
            <label class="col-form-label mt-2 d-flex justify-content-center">Registro de Usuarios</label>
            <br>
            <label class="col-form-label" for="usuario">Usuario</label>
            @if($errors -> first('usuario'))
                <p class="text-danger">{{ $errors -> first('usuario') }}</p>
            @endif</label>
            <input type="text" class="form-control" placeholder="Usuario" name="usuario">

            <label class="col-form-label mt-2" for="password">Contraseña</label>
            @if($errors -> first('password'))
                <p class="text-danger">{{ $errors -> first('password') }}</p>
            @endif</label>
            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
        </div>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </div>
    </form>
</div>

@endsection
