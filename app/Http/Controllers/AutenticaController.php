<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutenticarRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticaController extends Controller
{
    public function index() {
        $usuarios = User::all();
        return view('autentica.index', compact('usuarios'));
    }

    public function gravar(AutenticarRequest $req) {
        User::create($req->all());
        return redirect()->route('autentica');
    }

    public function login(Request $req) {
        if($req->isMethod('POST')){
            
            if(Auth::attempt($req->only('email','password'))){
                return redirect()->route('autentica');
            }

        }
        return view('autentica.login');
    }

    public function logout (){
        Auth::logout();
        return redirect()->route('autentica');
    }

}