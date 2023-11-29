{{$slot}}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input name="nome" value={{ old('nome')}} type="text" placeholder="Nome" class="{{$class}}">
    <br>
    <input name="telefone" value={{ old('telefone')}} type="text" placeholder="Telefone" class="{{$class}}">
    <br>
    <input name="email" value={{ old('email')}} type="text" placeholder="E-mail" class="{{$class}}">
    <br>
    <select name="motivo_contato" class="{{$class}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class="{{$class}}">{{ old('mensagem')}}</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>

    <div style="position:absolute; top:0px; left:0px; background:rgb(163, 35, 35)">
        {{ print_r($errors)}}
    </div>
</form>
