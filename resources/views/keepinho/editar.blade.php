<h1>💡Keepinho</h1>

@if ($errors->any())
<hr>
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

<form method="post" action="{{ route('keep.editarGravar') }}">
    <!-- Altera para método PUT -->
    @method('PUT')
    @csrf
    
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <input type="text" name="titulo" value="{{ old('titulo', $nota->titulo) }}"> <br>
    <input type="text" name="texto" value="{{ old('texto', $nota->texto) }}">
    <br> <br>
    <input type="submit" value="Editar Nota">
</form>