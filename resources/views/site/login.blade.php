@extends('site.layouts.basic')

@section('title', 'Login')
    
@section('content')
<div class="page-content blue-ocean white-text">
    <div class="page-title">
        <h1>Login</h1>
    </div>

    <div class="page-information blue-ocean">
      <form action="{{ route('site.login')}}" method="post">
        @csrf
        <input type="text" name="user" placeholder="Usuário">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Acessar</button>
      </form>
    </div>
</div>

@endsection
