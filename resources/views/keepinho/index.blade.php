<h1>💡Keepinho</h1>
<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal (melhor do que o google).</p>
<hr>

<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <textarea name="texto" cols="30" rows="10"></textarea>
    <br> <br>
    <input type="submit" value="Gravar Nota">
</form>

@foreach ($notas as $nota )
    <div style="border:1px dashed green; margin-bottom:10px">
        {{ $nota->texto }}
    </div>
@endforeach