<h3>Fonecedor (view)</h3>
{{-- Comentário no blade é feito assim! --}}
{{-- Podemos escrever código php direto do blade --}}



@php
 // Aqui dentro eu comento normalmente!
@endphp

<h3>O primeiro fornecedor da lista é: {{$fornecedores[0]['nome']}}</h3>


@if (count($fornecedores) > 0 && count($fornecedores) < 10)
<h3> Temos alguns fornecedores </h3>
@elseif (count($fornecedores) > 10)
<h3> Temos mil milhões de fornecedores </h3>
@else
<h3> Não temos fonecedores </h3>
@endif

@for ($i = 0; $i < count($fornecedores) ; $i++)
    {{$i+1}}: {{$fornecedores[$i]['nome']}} <br>
@endfor
