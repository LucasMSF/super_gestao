<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/estilo_basico.css') }}>
    <script src={{ asset('js/scripts/jquery.js') }}></script>
    <script src={{ asset('js/scripts/swal.js') }}></script>
    <title>Super Gestão (Cliente) - @yield('titulo')</title>
</head>
<body>
    @include('app.layouts._partials.topo')
    @yield('conteudo')
</body>

</html>
