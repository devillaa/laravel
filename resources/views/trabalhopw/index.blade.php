<h1>Funcionários</h1>

<form action="{{ route('empresa.gravar') }}" method="post">
    @csrf
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome" placeholder="Nome" required>

    <br><br>

    <label for="cargo">Cargo: </label>
    <input type="text" id="cargo" name="cargo" placeholder="Cargo" required>

    <br><br>

    <label for="departamento">Departamento: </label>
    <input type="text" id="departamento" name="departamento" placeholder="Departamento" required>

    <br><br>

    <label for="salario">Salário: </label>
    <input type="number" id="salario" name="salario" placeholder="Salário" step="0.01" required>

    <br><br>
    
    <input type="submit" value="Inserir Funcionário">
</form>

@foreach ($funcionarios as $funcionario )
    <div style="border:1px dashed green; margin-bottom:10px">
        <p>Nome: {{ $funcionario->nome }}</p>
        <p>Cargo: {{ $funcionario->cargo }}</p>
        <p>Departamento: {{ $funcionario->departamento }}</p>
        <p>Salário: {{ $funcionario->salario }}</p>
        <a href="{{ route('empresa.editar', $funcionario->id) }}">Editar</a>
        <a href="{{ route('empresa.excluir', $funcionario->id) }}">Excluir</a>
    </div>
@endforeach