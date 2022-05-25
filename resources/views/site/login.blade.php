@extends('site.layout.basico')

@section('titulo', $titulo)

{{-- @php var_dump($_POST) @endphp --}}

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Faça seu Login</h1>
        </div>
        <div style="width: 38%; margin: auto">
            @component('site.layout.componentes.formLogin', ['classe' => 'borda-preta'])
            @endcomponent
        </div>
       
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src={{ asset('img/facebook.png') }}>
            <img src={{ asset('img/linkedin.png') }}>
            <img src={{ asset('img/youtube.png') }}>
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src={{ asset('img/mapa.png') }}>
        </div>
    </div>

    <script src={{ asset('js/scripts/jqueryMask.js') }}></script>
    <script src={{ asset('js/page/contactForm.js') }}></script>
@endsection
