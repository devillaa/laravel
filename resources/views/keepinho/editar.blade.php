<h1>💡Keepinho</h1>

<form method="post" action="{{ route('keep.editarGravar') }}">
    <!-- Altera para método PUT -->
    @method('PUT')
    @csrf
    
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <input type="text" name="titulo" value="{{ $nota->titulo }}"> <br>
    <input type="text" name="texto" value="{{ $nota->texto }}">
    <br> <br>
    <input type="submit" value="Editar Nota">
</form>