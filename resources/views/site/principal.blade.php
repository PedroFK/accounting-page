@extends('site.layouts.basic')

@section('title', 'Home')

@section('content')
<div class="highlight-content">

    <div class="left">
        <div class="informations">
            <h1>Contabilidade Online</h1>
            <p>Software de contabilidade ideal para sua empresa.
            <p>
            <div class="headline">
                <img src={{ asset('img/check.png') }}>
                <span class="white-text">Contabildiade completa e descomplicada</span>
            </div>
            <div class="headline">
                <img src={{ asset('img/check.png') }}>
                <span class="white-text">Sua empresa na nuvem</span>
            </div>
        </div>

        <div class="video">
            <img src={{ asset('img/player_video.jpg') }}>
        </div>
    </div>

    <div class="right">
        <div class="contact">
            <h1>Contato</h1>
            <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
            <p>
                @component('site.layouts._components.contactForm', ['class'=> 'white-border white-text', 'contact_reasons' => $contact_reasons])
                @endcomponent
        </div>
    </div>
</div>
@endsection

