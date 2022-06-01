<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    private $titulo = 'Sobre nós';

    public function __construct()
    {
        /* $this->middleware(LogAcessoMiddleware::class); */
    }

    public function sobreNos() 
    {
        $titulo = $this->titulo;
        return view('site.sobre-nos', compact('titulo'));
    }
}
