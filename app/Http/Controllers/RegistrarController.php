<?php

namespace App\Http\Controllers;


use App\Registros;
use Illuminate\Http\Request;
use App\Tipos;

class RegistrarController extends Controller
{
    public function index()
    {
       return Registros::all();

    }

    public function findRegistro($id){

        $registros = Registros::all()->whereIn('tipos_id',$id);


        return $registros;

    }

    public function tr(){
        $trs = Tipos::all();
        return $trs;
    }


    public function registro(Request $request){

        $registros = Registros::create($request->all());
        if ($registros)
            return redirect()
                ->route('home')
                ->with('success', 'Registro inserido com sucesso!');
            return redirect()
            ->back()
            ->with('error', 'Falha ao registrar');

    }

    public function registroEdit(Request $request , $id){
        Registros::find($id)->update($request->all());
        return $request->all();
    }

    public function registroDelete($id){

        Registros::find($id)->delete();
        return Registros::all();
    }

}


