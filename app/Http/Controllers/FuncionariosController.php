<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    
    public function index(){
        $funcionarios = Funcionario::all();
        
        return view('trabalhopw/index', [
            'funcionarios' => $funcionarios,
        ]);
    }

    public function gravar(Request $request) {
        /*
            Cria um nota com todos os valores enviados pelo formulário. Porém, a Model vai ficar apenas com aqueles listados no $fillable.
        */
        Funcionario::create($request->all());
        return redirect()->route('empresa');
    }

    public function editar(Funcionario $funcionario, Request $request){
        if ($request->isMethod('put')){
            $funcionario = Funcionario::find($request->id);
            $funcionario->nome = $request->nome;
            $funcionario->cargo = $request->cargo;
            $funcionario->departamento = $request->departamento;
            $funcionario->salario = $request->salario;
            $funcionario->save();

            return redirect()->route('empresa');
        }

        return view('trabalhopw.editar', [
            'funcionario' => $funcionario,
        ]);
    }

    public function excluir(Funcionario $funcionario){
        $funcionario->delete();
        return redirect()->route('empresa');
    }

}