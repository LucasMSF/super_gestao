<form action={{route('site.contatoPost')}} method="POST">
    @csrf
    <input id="ip" name="userip" type="hidden" value="#">
    <input name="nome" type="text" placeholder="Nome" class={{$classe}} value="{{ old('nome') }}">
    <br>
    <input id="tel" name="telefone" type="text" placeholder="Telefone" class={{$classe}} value="{{ old('telefone') }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class={{$classe}} value="{{ old('email') }}">
    <br>
    <select name="motivo_contato" class={{$classe}}>
        <option value="Qual o motivo do contato?">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contato_id') == $motivo->id ? 'selected' : '' }}>{{ $motivo->motivo }}</option>    
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class={{$classe}}>{{ old('mensagem') ?  old('mensagem') : 'Preencha aqui a sua mensagem'}}</textarea>
    <br>
    <button type="submit" class={{$classe}}>ENVIAR</button>
</form>
@if(session('info'))
        <h3 style="color: black; text-align: center;">{{session('info')}}</h3>
    @endif
@if(count($errors) > 0)
   @foreach ($errors->all() as $key => $error)
        <span data-key={{ $key }} style="color: rgb(175, 15, 15); text-align: center;"> {{ $error }} </span>
   @endforeach
@endif

