<h1>💡Keepinho</h1>

<form method="post" action="{{ route('keep.editarGravar') }}">
    <!-- Altera para método PUT -->
    @method('PUT')
    @csrf
    
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <textarea name="texto" cols="30" rows="10">{{ $nota->texto }}</textarea>
    <br> <br>
    <input type="submit" value="Editar Nota">
</form>