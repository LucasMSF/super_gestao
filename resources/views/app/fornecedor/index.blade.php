@extends('app.layouts.basico')
@section('conteudo')
<div class="conteudo-pagina">
    <h3>Fornecedor</h3>

    @php
        /*
        if(empty($variavel)) {} //retornar true se a variável estiver vazia
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()
        - $var
        */
    @endphp

    @isset($fornecedores)

        @forelse($fornecedores as $indice => $fornecedor)
            ID: {{ $fornecedor->id }}
            <br>
            Fornecedor: {{ $fornecedor['nome'] }}
            <br>
            UF: {{ $fornecedor['uf'] }}
            <br>
            Site: {{ $fornecedor['site'] ?? '' }}
            <br>
            @if($loop->first)
                Primeira iteração no loop

                <br>
                Total de registros: {{ $loop->count }}
            @endif

            @if($loop->last)
                Última iteração no loop
            @endif
            <hr>
        @empty
            Não existem fornecedores cadastrados!!!
        @endforelse
        {{ $fornecedores->links() }}
    @endisset
</div>
@endsection