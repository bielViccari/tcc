<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comentario;
use App\Http\Requests\StoreComentario;

class ComentariosController extends Controller
{
    public function store(StoreComentario $request){
       
        $data = $request->all();

        $data ['user_id'] = Auth::user()->id;

        Comentario::create($data);

        return redirect()->back()
        ->with('mensagem','comentario enviado !');
    }

    public function destroy($id){
        $comentario= Comentario::find($id);
        $comentario->delete();

        return redirect()->back()
        ->with('mensagem','comentario apagado');
    }
}
