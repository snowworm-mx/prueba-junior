<?php
    $sessionusuario = session('sessionusuario');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">Gestor De Productos SA de CV</a>
            @if($sessionusuario <> "")
            <div class="row">
                <div class="col-6 d-flex align-items-center text-center">
                    <h6 class="text-light">Bienvenido <?php echo $sessionusuario ?></h6>
                </div>
                <div class="col-6 d-flex align-items-center">
                    @if($sessionusuario <> "")
                        <a href="{{ route('cerrarsesion') }}">
                            <button class="btn  btn-danger btn-sm" type="button">Cerrar Sesión</button>
                        </a>
                    @endif
                </div>
            </div>
            @endif

        </div>
    </nav>

</head>
<body>
    <div id="contenido" class="d-flex justify-content-center">
        <div class="col-11 ">
            @yield('contenido')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
