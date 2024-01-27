@extends('app.layouts.basic')

@section('title', 'Produto - Adicionar')

@section('content')
    <div class="page-content">
        <div class="page-title-2">
            <p>Produto - Adicionar</p>
        </div>


        <div class="menu-2" style="">
            <ul>
                <li>
                    <a href=""style="color: white;">Novo</a>
                    <a href="" style="color: white;">Consulta</a>
                </li>
            </ul>
        </div>

        <div class="page-information blue-ocean">
            <div style="width: 30%; margin-left: auto; margin-right: auto; color: white;">
                <form method="post" action="">
                    @csrf
                    <input type="text" name="name" value="{{$product->name ?? old('name')}}" placeholder="Nome" class="black-border" id="">
                    <input type="text" name="name" value="{{$product->description ?? old('name')}}" placeholder="Descrição" class="black-border" id="">
                    <input type="text" name="name" value="{{$product->weight ?? old('name')}}" placeholder="Peso" class="black-border" id="">
                    <select name="unit_id">
                        <option value="">-- Selecione a unidade de medida --</option>
                        <option value="1">Unidade</option>
                    </select>
                    <button type="submit" class="black-border">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
