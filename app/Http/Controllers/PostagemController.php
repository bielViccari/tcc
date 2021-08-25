<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePostagens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostagemController extends Controller
{


    public function index(){
        $postagens = Postagem::where('user_id', Auth::user()->id)->get();
        return view('admin.postagens.index',compact ('postagens'));
    }

    public function create(){
        return view('admin.postagens.create');
    }


    public function store(StoreUpdatePostagens $request){

        $dados = $request->all();

        if($request->imagem && $request->imagem->isValid()){
            $nome_imagem = Str::of($request->titulo . date('dmYHis'))->slug('-') . '.' . $request->imagem->getClientOriginalExtension();

            $imagem = $request->imagem->storeAs('postagem', $nome_imagem);
            $dados['imagem'] = $imagem;
        }

        $dados['user_id'] = Auth::user()->id;

        $postagem = Postagem::create($dados);

        return redirect()
                    ->route('postagens.show', $postagem->id)
                    ->with('mensagem', 'Postagem criada com sucesso');
    }









    public function show($id){
        $postagens = Postagem::find($id);
        if (!$postagens)
        return redirect()->route('postagens.index');
        return view('admin.postagens.show', compact('postagens') );
    }









    public function update(StoreUpdatePostagens $request, $id){
       if(!$postagens = Postagem::find($id))
       return redirect()->back();

       
       $dados = $request->all();
       if($request->imagem && $request->imagem->isValid() ){
           if(Storage::exists($postagem->imagem))
              Storage::delete($postagem->imagem);


          $nome_imagem = str::of($request->o_que_vai_doar . date('dmYHis'))->slug('-') . '.' . $request->imagem->getClientOriginalExtension();
          
          $imagem =$request->imagem->StoreAs('postagem',$nome_imagem);

          $dados['imagem'] = $imagem;
         
       }

       $dados->update($postagens->all());

       return redirect()
       ->route('postagens.index')
       ->with('mensagem',"Doação editada com sucesso !");   


        }








    public function edit($id){
        $postagens= Postagem::find($id);

        if(!$postagens)
           return redirect()->back();

           return view('admin.postagens.edit', compact('postagens'));
    }









    public function destroy($id){
        $postagens= Postagem::find($id);

        if(!$postagens)
          return redirect()->route('postagens.index');

             if(Storage::exists($postagens->imagem))
              Storage::delete($postagens->imagem);

          $postagens->delete();

          return redirect()->route('postagens.index')->with('mensagem','Postagem deletada com sucesso !');
    }


}
