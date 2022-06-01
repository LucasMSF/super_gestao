<?php

namespace App\Http\Controllers;

use App\Mail\SendMailUser;
use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    private $titulo = 'Contato';

    public function contato()
    {
        $motivo_contato = MotivoContato::all();

        $titulo = $this->titulo;
        return view('site.contato', compact(['titulo', 'motivo_contato']));
    }

    public function registrarContato(Request $request)
    {
        //Mail::to('lucasgg003@gmail.com')->send(new SendMailUser(['name' => 'Teste', 'email' =>'teste@gmail.com']));

        $request->validate([
            'nome' => 'required|min:3|max:30',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ], [
            'required' => "O :attribute precisa ser preenchido",
            'email' => "Insira um endereço de E-mail valido",
        ]);

        $contact = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'motivo_contato_id' => $request->motivo_contato,
            'mensagem' => $request->mensagem,
            'user_ip' => $request->userip
        ];

        SiteContato::create($contact);

        // Mail::to($request->email)->send(new SendMailUser(['name' => $request->nome, 'email' => $request->email, 'tel' => $request->nome]));

        return redirect()->back()->with('info', 'Formulário enviado!');
    }
}
