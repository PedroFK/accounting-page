{{$slot}}
<form action={{ route('site.contact') }} class="blue-ocean" method="POST">
    @csrf
    <input name="name"  value='{{ old('name')}}' type="text" placeholder="Nome" class="{{$class}}">
    {{ $errors->has('name') ? $errors->first('name') : '' }}
    <br>
    <input name="phone_1" value='{{ old('phone_1')}}' type="text" placeholder="Telefone" class="{{$class}}">
    {{ $errors->has('phone_1') ? $errors->first('phone_1') : '' }}
    <br>
    <input name="email" value='{{ old('email')}}' type="text" placeholder="E-mail" class="{{$class}} ">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="contact_reason_id" class="{{$class}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($contact_reasons as $contact_reason->id => $contact_reason)
        <option value="{{$contact_reason->id}}" {{old('contact_reason_id') == $contact_reason->id ? 'selected' : ''}}>{{$contact_reason->contact_reason}}</option>
        @endforeach
    </select>
    {{ $errors->has('contact_reason_id') ? $errors->first('contact_reason_id') : '' }}
    <br>
    <textarea name="message" placeholder="Preencha aqui a sua mensagem" class="{{$class}}">@if (old('message') != '') {{ old('message')}} @endif</textarea>
    {{ $errors->has('message') ? $errors->first('message') : '' }}
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>

    @if ($errors->any())
        <div style="position:absolute; top:0px; left:0px; background:rgb(163, 35, 35)">
            @foreach ($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        </div>
        
    @endif
    
</form>
