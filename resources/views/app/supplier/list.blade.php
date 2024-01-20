@extends('app.layouts.basic')

@section('title', 'Fornecedor - lista')

@section('content')
<div class="page-content">
    <div class="page-title-2">
        <p>Lista Fonecedores</p>
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
            <div style="width: 90%; margin-left: auto; margin-right: auto; color: white;">
                <table style="color: white;" border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>Estado</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <th>{{$supplier->name}}</th>
                                <th>{{$supplier->site}}</th>
                                <th>{{$supplier->state}}</th>
                                <th>{{$supplier->email}}</th>
                                <th>Adicionar</th>
                                <th>Excluir</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
</div>
@endsection
