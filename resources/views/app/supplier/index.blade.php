@extends('app.layouts.basic')

@section('title', 'Fornecedor')

@section('content')
<div class="page-content">
    <div class="page-title-2">
        <p>Fornecedor</p>
    </div>

    
        <div class="menu-2" style="">
            <ul>
                <li>
                    <a href="{{ route('app.supplier.add')}}" style="color: white;">Novo</a>
                    <a href="{{ route('app.supplier') }}" style="color: white;">Consulta</a>
                </li>
            </ul>
        </div>
    
        <div class="page-information blue-ocean">
            <div style="width: 30%; margin-left: auto; margin-right: auto; color: white;">
                <form method="post" action="{{ route('app.supplier.list') }}">`
                    @csrf
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Nome" class="black-border" id="">
                    {{    $errors->has('name') ? $errors->first('name') : ''}}
                    <input type="text" name="site" value="{{old('site')}}" placeholder="Site" class="black-border" id="">
                    {{    $errors->has('site') ? $errors->first('site') : ''}}
                    <input type="text" name="state" value="{{old('state')}}" placeholder="Estado" class="black-border" id="">
                    {{    $errors->has('state') ? $errors->first('state') : ''}}
                    <input type="text" name="email" value="{{old('email')}}" placeholder="E-mail" class="black-border" id="">
                    {{    $errors->has('email') ? $errors->first('email') : ''}}
                    <button type="submit" class="black-border">Pesquisar</button>
                </form>
            </div>
        </div>
    
</div>
@endsection
