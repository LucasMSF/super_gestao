<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href={{asset('css/estilo_basico.css')}}>
        <script src={{ asset('js/scripts/jquery.js') }}></script>
        <script src={{ asset('js/scripts/swal.js') }}></script>       
    </head>
        @include('site.layout.partes.topo')
    <body>
        @yield('conteudo')
    </body>
</html>