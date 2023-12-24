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
                    <a href="#" style="color: white;">Novo</a>
                    <a href="#" style="color: white;">Consulta</a>
                </li>
            </ul>
        </div>
    
        <div class="page-information blue-ocean">
            <div style="width: 30%; margin-left: auto; margin-right: auto; color: black;">
                <form method="post" action="">
                    <input type="text" name="name" placeholder="Nome" class="black-border" id="">
                    <input type="text" name="site" placeholder="Site" class="black-border" id="">
                    <input type="text" name="uf" placeholder="Estado" class="black-border" id="">
                    <input type="text" name="email" placeholder="E-mail" class="black-border" id="">
                    <button type="submit" class="black-border">Pesquisar</button>
                </form>
            </div>
        </div>
    
</div>
@endsection
