<form action={{route('site.login')}} method="POST">
    @csrf
    <input name="usuario" type="text" placeholder="Usuario" class={{$classe}} value="{{ old('usuario') }}">
    <span>{{ $errors->has('usuario') ? $errors->first('usuario') : '' }}</span>
    <br>
    <input name="senha" type="password" placeholder="Senha" class={{$classe}} value="{{ old('senha') }}">
    <span>{{ $errors->has('senha') ? $errors->first('senha') : '' }}</span>
    <button type="submit" class={{$classe}}>LOGIN</button>
</form>
{{ session('error') ? session('error') : '' }}


