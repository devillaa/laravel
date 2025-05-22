<h1>💡Keepinho</h1>
<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal (melhor do que o google).</p>
<hr>

<a href="{{ route('keep.lixeira') }}">🗑️ Lixeira</a>

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
@endif


<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <label for="titulo">Título: </label>
    <input type="text" id="titulo" name="titulo" placeholder="Título: " value="{{ old('titulo') }}"> <br>

    <label for="texto">Nota: </label>
    <input name="texto" id="texto" placeholder="Nota: " value="{{ old('texto') }}">
    <br> <br>
    <input type="submit" value="Gravar Nota">
</form>

@foreach ($notas as $nota )
    <div style="border:1px dashed green; margin-bottom:10px">
        <p>Título: {{ $nota->titulo }}</p>
        <p>Nota: {{ $nota->texto }}</p>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>
        <br>
        <form action="{{ route('keep.apagar',$nota->id) }}" method="POST">
            @method('DELETE')    
            @csrf
            <input type="submit" value="Excluir">
        </form>

    </div>
@endforeach