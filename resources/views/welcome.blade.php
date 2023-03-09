<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>

<body class="container">
    <!-- Muestra un mensjae en cuyo el caso en que los datos se actualicen correctamente -->
    @if (session('success'))
    <div>{{session('success')}}</div>
    @endif
    <!-- Formulario que envia el documento excel a la base de datos -->
    <form action="{{route('importar_excel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="import_file" />

        <button type="submit">Importar</button>
    </form>


</body>

</html>