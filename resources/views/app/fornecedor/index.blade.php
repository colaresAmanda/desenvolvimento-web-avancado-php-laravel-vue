<h1>Fornecedor</h1>
@php
    /* if(){
        
    }*/
@endphp

{{-- @dd($fornecedores) // imprime array --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 5)
    <h3>Existem menos de 5 fornecedores</h3>
@elseif(count($fornecedores) >= 5 && count($fornecedores) < 10)
    <h3>Existem 5 ou mais fornecedores</h3>
@else
    <h3>Não existem fornecedores</h3>
@endif

{{-- @dd($fornecedores1) --}}
Fornecedor: {{$fornecedores1[0]['nome']}}
<br>
Status: {{$fornecedores1[0]['status']}}
<br>


@if( !($fornecedores1[0]['status'] == 'ativo'))
    Fornecedor inativo
@endif
<br>
{{-- se for negativo ele executa, mesma coisa que o de cima --}}
@unless($fornecedores1[0]['status'] == 'ativo')
    Fornecedor inativo
@endunless