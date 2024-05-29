@extends('app.layouts.basic')

@section('title', 'Cliente - Adicionar')

@section('content')
    <div class="page-content">
        <div class="page-title-2">
            <p>Cliente - Adicionar</p>
        </div>


        <div class="menu-2" style="">
            <ul>
                <li>
                    <a href="{{ route('client.create') }}"style="color: white;">Novo</a>
                    <a href="" style="color: white;">Consulta</a>
                </li>
            </ul>
        </div>

        <div class="page-information blue-ocean">
            <div style="width: 30%; margin-left: auto; margin-right: auto; color: white;">
                {{ $msg ?? '' }}
                <form method="post" action="{{ route('client.store') }}">
                    @csrf
                    <input type="text" name="name" value="{{$client->name ?? old('name')}}" placeholder="Nome" class="black-border">
                    {{    $errors->has('name') ? $errors->first('name') : ''}}
                    <button type="submit" class="black-border">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
