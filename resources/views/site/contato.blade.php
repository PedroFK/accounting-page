@extends('site.layouts.basico')

@section('titulo', 'Contato')
    
@section('content')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('site.layouts._components.contactForm', ['class'=> 'borda-preta', 'motivo_contatos' => $motivo_contatos])
            <h3>Entraremos em contato em até 5 dias úteis!</h3>
            @endcomponent
        </div>
    </div>
</div>

@endsection
