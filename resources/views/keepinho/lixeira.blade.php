<h1>💡 Keepinho</h1>
<h2>🗑️ Lixeira</h2>
<hr>
<a href="{{ route('keep') }}">Voltar para o início</a>
<hr>

@if (session('sucesso'))

<div style="background-color:darkseagreen;border:1px solid green; margin-bottom:5px;padding:3px;font-size:20px;font-weight:bold;">
    {{ session('sucesso') }}
</div>

@endif

@foreach ($notas as $nota )
    <div style="border:1px dashed green; margin-bottom:10px">
        <p>Título: {{ $nota->titulo }}</p>
        <p>Nota: {{ $nota->texto }}</p>
        <p>Deletada em: {{ $nota->deleted_at }}</p>
        <a href="{{ route('keep.restaurar',$nota->id) }}">♻️ Restaurar nota</a>
    </div>
@endforeach