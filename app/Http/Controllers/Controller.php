<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public  function ativo(){
        $ativo = Ativo::all();
        $ativos = Ativo::orderBy('nome')->get();
        return  view('welcome', compact('ativo','ativos'));
    }
}
