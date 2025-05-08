<h1>Empresa</h1>

<form method="post" action="{{ route('empresa.editarGravar') }}">
    <!-- Altera para método PUT -->
    @method('PUT')
    @csrf
    
    <input type="hidden" name="id" value="{{ $funcionario->id }}">
    
    <label for="nome">Nome: </label>
    <input type="text" id="nome" placeholder="Nome: " name="nome" value="{{ $funcionario->nome }}"> <br>

    <label for="cargo">Cargo: </label>
    <input type="text" id="cargo" placeholder="Cargo: " name="cargo" value="{{ $funcionario->cargo }}" > <br>

    <label for="departamento">Departamento: </label>
    <input type="text" id="departamento" placeholder="Departamento: " name="departamento" value="{{ $funcionario->departamento }}" > <br>

    <label for="salario">Salario: </label>
    <input type="number" id="salario" placeholder="Salario: " name="salario" value="{{ $funcionario->salario }}" > <br>

    <br> 
    <input type="submit" value="Editar Funcionario">
</form>