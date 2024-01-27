@extends('app.layouts.basic')

@section('title', 'Product')

@section('content')
<div class="page-content">
    <div class="page-title-2">
        <p>Lista de Produtos</p>
    </div>

    
        <div class="menu-2" style="">
            <ul>
                <li>
                    <a href="{{ route('app.product.add')}}" style="color: white;">Novo</a>
                    <a href="{{ route('app.product.list')}}" style="color: white;">Consulta</a>
                </li>
            </ul>
        </div>
    
        <div class="page-information blue-ocean">
            <div style="width: 90%; margin-left: auto; margin-right: auto; color: white;">
                <table style="color: white;" border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th>{{$product->name}}</th>
                                <th>{{$product->description}}</th>
                                <th>{{$product->weight}}</th>
                                <th>{{$product->unit_id}}</th>
                                <th><a href="">Editar</a></th>
                                <th><a href="">Excluir</a></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
</div>
@endsection
