<!DOCTYPE html>
@extends('layouts.footer')
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Solidariedade</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
   ul {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

li {
  margin: 0 2rem;
}


#a {
  display: block;
  position: relative;
  padding: 0.2em 0;
  
}

#a:hover{
  transform: scale(1.1);
    transition: all 0.5s;
}

#a::after {
  
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0.1em;
  background-color: rgb(255, 255, 255);
  opacity: 0;
  transition: opacity 300ms, transform 300ms;
}

#a:hover::after,
#a:focus::after {
  
  opacity: 1;
  transform: translate3d(0, 0.2em, 0);
}


</style>


</head>

<body>
  <div>
    <nav class="bg-blue-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="{{ url('solidariedade.png') }}" alt="Workflow">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                
                <a href="{{ route('admin.home') }}" id="a" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>
  
                <a href="{{ route('postagens.index') }}" id="a"  class="bg-blue-800 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Doações</a>
  
                <a href="{{ route('postagens.create') }}" id="a" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fazer doações</a>
  
                <a href="{{ route('site.quem_somos.home') }}" id="a" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Quem Somos?</a>
  
                
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
             
  
              
              
            </div>
          </div>
         
        </div>
      </div>
    </nav>

    

<div class="container border-rounded-lg  shadow-md  mt-14">
    <div class="flex">
      <div class="flex-none w-48 relative">
        <img src="{{ url("storage/{$postagens->imagem}") }}" alt="" class="absolute inset-0 w-full h-full object-cover" />
      </div>
      <form class="flex-auto p-6">
        <div class="flex flex-wrap">
          <h1 class="flex-auto text-xl font-semibold">
            {{  $postagens->o_que_vai_doar }}
          </h1>
          <div class="text-xl font-semibold text-gray-500">
          
           <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
            <svg width="20" height="20" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
            </svg>
          </button>
          </div>
          
        </div>
        <div class="flex items-baseline mt-4 mb-6">
          <div class="space-x-2 flex">
            <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
              Contato: &nbsp &nbsp &nbsp &nbsp &nbsp {{ $postagens->telefone }}
            </div>
            
          </div>

          

          <div class="ml-auto text-sm text-gray-500 underline"></div>
        </div>
        <div class="flex items-baseline mt-4 mb-6">
          <div class="space-x-2 flex">
            <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
              Tipo:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp{{ $postagens->tipo }}
            </div>
            
          </div>

          

          <div class="ml-auto text-sm text-gray-500 underline"></div>
        </div>
        
        <div class="flex items-baseline mt-4 mb-6">
          <div class="space-x-2 flex">
            <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
              Quantidade:&nbsp &nbsp &nbsp {{ $postagens->quantidade }}
            </div>
            
          </div>

          

          <div class="ml-auto text-sm text-gray-500 underline"></div>
        </div>
        <div class="flex space-x-3 mb-4 text-sm font-medium">
          <div class="flex-auto flex space-x-3">
      
          </div>
          <p class="flex-none flex items-center justify-center w-9 h-9  text-gray-400" >
            
          </p>
        </div>
        
      </form>
    </div>
</div>

<div class="comentarios">
  <div class="row">
    @foreach ($postagens->comentarios as $comentario )
    <div class="col-3">
<p class="imagem">
   {{ $comentario->iniciais() }}
</p>
    </div>
    <div class="col-9">
  <p class="comentario">
   {{ $comentario->comentario }}
  </p>
    </div>
    <div class="col-12">
      <p class="text-muted">
      por: {{ $comentario->user->name }} em {{ $comentario->created_at }}
      </p>   
    </div>
    @endforeach
  </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <strong>algo deu errado</strong> <br><br>
  <ul>
    @foreach ($errors as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if ($mensagem = Session::get('mensagem'))
<div class="alert alert-success">
  <p>{{ $mensagem }}</p>
</div>
    
@endif


<form method="POST" action="{{ route('comentarios.store') }}">
@csrf
  <input type="hidden" name="postagem_id" value="{{ $postagens->id }}">

  <div class="form-group">
    <label for="comentario">Deixe sua pergunta para o doador</label>
    <textarea name="comentario" id="comentario" class="form-control" cols="30" rows="10">{{ old('comentario') }}</textarea>
  </div>

  <button type="submit" class="btn btn-success">
  Enviar
  </button>
</form>

   @yield('footer')

</body>

</html>