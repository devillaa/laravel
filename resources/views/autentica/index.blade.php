<h1>Usuários</h1>

@if (Auth::user())
    Olá {{ Auth::user()->name }}. <br>
    <a href="{{ route('autentica.logout') }}">Sair</a>
@else
    Você não está autenticado.
    <a href="{{ route('autentica.login') }}">Entrar</a>
@endif


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

@foreach ($usuarios as $user)
    <li>{{ $user->name }}</li>
@endforeach