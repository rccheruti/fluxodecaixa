<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imagens;

class ImgController extends Controller
{
    public function index(){
        $img = Imagens::all();
        return view('welcome', compact('img'));

    }

    public function indexConfig(){
        $img = Imagens::all();
        return view('config', compact('img'));

    }

    public function store(Request $request)
    {

        $path = $request->file('input')->store('imagens', 'public');
        $img = new Imagens();
        $img->file = $path;
        $img->save();
        return redirect('/config');

    }
    public function destroy($id)
    {
        $img = Imagens::find($id);
        if (isset($img)){
            $input = $img->file;
            Storage::disk('public')->delete($input);
            $img->delete();
        }
        return redirect('/config');
    }


}
