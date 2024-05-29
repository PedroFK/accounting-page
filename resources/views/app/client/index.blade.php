@extends('app.layouts.basic')

@section('title', 'Cliente')

@section('content')
<div class="page-content">
    <div class="page-title-2">
        <p>Listagem de Clientes</p>
    </div>

    
        <div class="menu-2" style="">
            <ul>
                <li>
                    <a href="{{ route('client.create')}}" style="color: white;">Novo</a>
                    <a href="" style="color: white;">Consulta</a>
                </li>
            </ul>
        </div>
    
        <div class="page-information blue-ocean">
            <div style="width: 90%; margin-left: auto; margin-right: auto; color: white;">
                <table style="color: white;" border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clients as $client)
                            <tr>
                                <td>{{$client->name}}</td>
                                <td><a href="{{ route('client.show', ['client' => $client->id]) }}">Mostrar</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhum cliente encontrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    
</div>
@endsection
