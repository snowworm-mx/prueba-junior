@extends('layout')
@section('contenido')
<div class="row d-flex justify-content-center mt-3">
    <div class="col-8">
        <h2 class="d-flex justify-content-center mb-3">Reporte de Productos</h2>
    </div>
    <div class="col-2">
        <a href="{{ route('altaproductos') }}">
            <button class="btn btn-primary" type="button">Nuevo Producto</button>
        </a>
    </div>
    <div class="col-10">
        @if(Session::has('mensaje'))
            <div class="alert alert-success mt-3 mb-3">
                {{ Session::get('mensaje') }}
            </div>
        @endif
    </div>
    <div class="col-9 ">
        <table class="table ">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad en Inventario</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta as $c)
                <tr class="text-center">
                    <th scope="row">{{ $c -> idproducto }}</th>
                    <td>{{ $c -> nombreproducto }}</td>
                    <td>{{ $c -> descripcion }}</td>
                    <td>{{ $c -> precio }}</td>
                    <td>{{ $c -> cantidadinventario }}</td>
                    <td>
                        <a href="{{ route('modificaproducto', ['idproducto'=>$c->idproducto]) }}">
                            <button type="button" class="btn btn-info">Modificar</button>
                        </a>
                        <a href="{{ route('eliminaproducto', ['idproducto'=>$c->idproducto]) }}">
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="d-flex justify-content-center">
                {{ $consulta->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
