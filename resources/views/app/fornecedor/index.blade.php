<h1>Fornecedor</h1>
@php
    /* if(){
        
    }*/
@endphp


@isset($fornecedores)
    @forelse($fornecedores as $indice  => $fornecedor)
        Iteração atual {{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome'] ?? ''}}
        <br>
        Status: {{$fornecedor['status'] ?? ''}}
        <br>
        CPNJ: {{$fornecedor['cpnj'] ?? ''}}
        @if($loop->first)
            Primeira iteração
        @endif
         @if($loop->last)
            última iteração
            <br>
                Total de registros {{$loop->count}}
        @endif
        <hr>

    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
