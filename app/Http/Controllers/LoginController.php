<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    private $titulo = 'Login';

    public function index()
    {
        $titulo = $this->titulo;
        return view('site.login', compact('titulo'));
    }

    public function autenticar(Request $request)
    {
        $validacoes = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $msgs = [
            'usuario.email' => 'O E-mail e obrigatorio e deve ser valido!',
            'senha.required' => 'A Senha e obrigatoria!'
        ];

        $request->validate($validacoes, $msgs);
        $usuario = User::select('name', 'email', 'created_at', 'updated_at')
                        ->where('email', $request->usuario)
                        ->where('password', sha1($request->senha))
                        ->first();

        if(!empty($usuario)) {
            session()->put('usuario', $usuario);
            return redirect()->route('app.home');
        } else {
            return redirect()->back()->with('error', 'Usuario ou senha invalidos!');
        }
    }

    public function sair()
    {
        session()->forget('usuario');
        return redirect()->route('site.index');
    }
}
