<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    private $titulo = 'Home';
     
    public function principal() {
        $titulo = $this->titulo;
        $motivo_contato = MotivoContato::all();
        return view('site.principal', compact(['titulo', 'motivo_contato']));
    }
}
