<h1>Fornecedor</h1>
@php
    /* if(){
        
    }*/
@endphp


@isset($fornecedores)
    Fornecedor: {{$fornecedores[1]['nome']}}
    <br>
    Status: {{$fornecedores[1]['status']}}
    <br>
    @isset($fornecedores[1]['cpnj'])
        CNPJ: {{$fornecedores[1]['cpnj']}}
        @empty($fornecedores[1]['cnpj'])
            - vazio
        @endempty
    @endisset
    <br>
@endisset
