@extends('site.layouts.basic')

@section('title', 'Login')
    
@section('content')
<div class="page-content blue-ocean white-text">
    <div class="page-title">
        <h1>Login</h1>
    </div>

    <div class="page-information blue-ocean">
      <div style="margin-left: auto; margin-right: auto; width: 30%;" class="text-white">
        <form action="{{ route('site.login')}}" method="post" class="container">
          @csrf
          <input type="text" value="{{old('user')}}" name="user" placeholder="Usuário">
          {{$errors->has('user') ? $errors->first('user') : ''}}
          <input type="password" value="{{old('password')}}" name="password" placeholder="Senha">
          {{$errors->has('password') ? $errors->first('password') : ''}}
          <button type="submit">Acessar</button>
        </form>
        {{!empty($erro) && $erro != '' ? $erro : ''}}
      </div>
    </div>
</div>

@endsection
