@extends('layout')

@section('contenido')
    <form class="row d-flex justify-content-center mt-4" action="{{ route('guardarproducto') }}" method="POST">
        {{csrf_field()}}
        <div class="col-5">
            <div>
                <label class="form-label">ID</label>
                <input class="form-control" value="{{$idesigue}}" readonly="readonly" name="idproducto" id="idproducto">
            </div>
            <div class="mt-3">
                <label class="form-label" for="precio">Precio</label>
                @if($errors -> first('precio'))
                <p class="text-danger">{{ $errors -> first('precio') }}</p>
                @endif</label>
                <input type="number" class="form-control" placeholder="00.00" value="{{ old('precio') }}" name="precio" id="precio">
            </div>
            <div class="mt-3">
                <label class="form-label" for="cantidadInventario">Cantidad en Inventario</label>
                @if($errors -> first('cantidadInventario'))
                <p class="text-danger">{{ $errors -> first('cantidadInventario') }}</p>
                @endif</label>
                <input type="number" class="form-control" placeholder="100" value="{{ old('cantidadInventario') }}" name="cantidadInventario" id="cantidadInventario">
            </div>
        </div>
        <div class="col-5">
            <div>
                <label class="form-label" for="nombre">Nombre</label>
                @if($errors -> first('nombre'))
                <p class="text-danger">{{ $errors -> first('nombre') }}</p>
                @endif</label>
                <input type="text" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}" name="nombre" id="nombre">
            </div>
            <div class="mt-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Guardar Producto</button>
            </div>
        </div>
    </form>
@endsection
