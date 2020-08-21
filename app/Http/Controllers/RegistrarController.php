<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Saida;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
   public function index(){
       return view('registrar');

   }

   /* Entradas */

   public function entrada(Request $request){
       $entrada = new Entrada();
       $entrada->nome = $request->input('nomeEntrada');
       $entrada->valor = $request->input('valorEntrada');
       $entrada->user_id = $request->input('user_id');
       $entrada->save();
       return json_encode($entrada);
   }

   public function editarEntrada(Request $request, $id){
       $entrada = Entrada::find($id);
       if(isset($entrada)){
           $entrada->nome = $request->input('nome');
           $entrada->valor = $request->input('valor');
           $entrada->user_id = $request->input('user_id');
           $entrada->save();
           return json_encode($entrada);
       }
       return response('Entrada não encontrada', 404);
   }

   public function apagarEntrada($id){

       $entrada = Entrada::find($id);
       if(isset($entrada)){
           $entrada->delete();
           return response('OK', 200);
       }
       return response('Produto não encontrado', 404);

   }

   /* Saidas */


    public function saida(Request $request){
        $saida = new Saida();
        $saida->nome = $request->input('nome');
        $saida->valor = $request->input('valor');
        $saida->user_id = $request->input('user_id');
        $saida->save();
        return json_encode($saida);
    }

    public function editarSaida(Request $request, $id){
        $saida = Entrada::find($id);
        if(isset($saida)){
            $saida->nome = $request->input('nome');
            $saida->valor = $request->input('valor');
            $saida->user_id = $request->input('user_id');
            $saida->save();
            return json_encode($entrada);
        }
        return response('Saida não encontrada', 404);
    }

    public function apagarSaida($id){

        $saida = Entrada::find($id);
        if(isset($saida)){
            $saida->delete();
            return response('OK', 200);
        }
        return response('Saida não encontrado', 404);

    }

    /* retiradas */

    /* DFM */

    /* DFA */


}
