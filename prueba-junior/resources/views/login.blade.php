@extends('layout')

@section('contenido')

<div class="d-flex justify-content-center">
    <form action="{{ route('validarlogin') }}" method="POST">
        {{csrf_field()}}
        <div>
            <label class="col-form-label mt-2 d-flex justify-content-center">Iniciar Sesión</label>
            @if(Session::has('mensaje'))
                <div class="alert alert-success mt-3 mb-3">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
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
            <a class="col-5" href="{{ route('registrousuario') }}">
                <button class="btn btn-link" type="button">Registrarse</button>
            </a>
            <div class="col-7 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
        </div>
    </form>
</div>

@endsection
