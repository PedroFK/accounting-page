{{$slot}}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input name="nome" value='{{ old('nome')}}' type="text" placeholder="Nome" class="{{$class}}">
    <br>
    <input name="telefone" value='{{ old('telefone')}}' type="text" placeholder="Telefone" class="{{$class}}">
    <br>
    <input name="email" value='{{ old('email')}}' type="text" placeholder="E-mail" class="{{$class}}">
    <br>
    <select name="motivo_contato" class="{{$class}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $motivo_contato->id => $motivo_contato)
        <option value="{{$motivo_contato->id}}" {{old('motivo_contato') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class="{{$class}}">@if (old('mensagem') != '') {{ old('mensagem')}} @endif</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>

    <div style="position:absolute; top:0px; left:0px; background:rgb(163, 35, 35)">
        {{print_r($errors)}}
    </div>
</form>
