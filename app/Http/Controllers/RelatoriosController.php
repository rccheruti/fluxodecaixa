<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    public function relatorios(){
        return view('/relatorio');

    }
}
