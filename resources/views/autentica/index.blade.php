<h1>Usuários</h1>
<hr>
@if ($errors->any())
<div style="color: red;">
    <h3>Erro!</h3>
    <ul>
        @foreach ($errors->all() as $err )
            <li> {{ $err }}</li>
        @endforeach
    </ul>

</div>
<hr>
@endif

<form action="{{ route('autentica.gravar') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}"> <br>
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"> <br>
    <input type="password" name="password" placeholder="Senha"> <br>
    <input type="password" name="password_confirmation" placeholder="Confirme a Senha"> <br><br>
    <input type="submit" value="Enviar">
</form>