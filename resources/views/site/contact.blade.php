@extends('site.layouts.basic')

@section('titulo', 'Contato')
    
@section('content')
<div class="page-content">
    <div class="page-title">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="page-information">
        <div class="main-contact">
            @component('site.layouts._components.contactForm', ['class'=> 'black-border', 'contact_reasons' => $contact_reasons])
            <h3>Entraremos em contato em até 5 dias úteis!</h3>
            @endcomponent
        </div>
    </div>
</div>

@endsection
