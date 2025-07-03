<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhosController extends Controller
{
    public function index() {
        
        $carrinho = session()->get('carrinho', []);
        return view('carrinho/index', compact('carrinho'));
    }

    public function salvar(Request $request , Produto $produto ){
        $carrinho = session()->get('carrinho', []);
        $id = $produto->id;


        if (isset($carrinho[$id])) {
            $carrinho[$id]['quantidade'] += 1;
        } else {
            $carrinho[$id] = $produto->only(['id', 'nome', 'preco', 'imagem']);
            $carrinho[$id]['quantidade'] = 1;
        }
    
        session()->put('carrinho', $carrinho);
        
        return redirect()->route('produtos.index');
    }

    public function deletar(Request $request, $id)
    {
        $carrinho = session()->get('carrinho', []);
    
        if (isset($carrinho[$id])) {
            unset($carrinho[$id]);
            session()->put('carrinho', $carrinho);
        }
    
        return redirect()->route('carrinho');
    }
    

}
