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

#deixe_sua_pergunta
{
  
  
}
#iniciais
{
  margin-left: 30px;
  margin-top: 20px;
  border: 1px solid rgb(87, 85, 85);
  border-radius: 50%;
  width: 50px;
  height: 50px;
  text-align:center;
  line-height: 47px;
  font-weight: 600;
  
  background-color: rgb(29, 30, 31);
  
  
}
#texto_comentario
{
  margin-top: 30px;
  
}
#user_comentario
{
  font-size: 12px;
  margin-top:10px;
}
#comentarios
{
 
  width: 96%;
  float: left;
 
}


#imagem
{
  
  width:440px;
   height:500px;
}
.tudo
{
  display: table;
}

</style>


</head>

<body>
 
  <nav class="bg-blue-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="{{ url('solidariedade.png') }}" alt="Workflow">
          </div>
          <div class=" md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              
              
              <a href="{{ route('admin.home') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>

              <a href="{{ route('postagens.index') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Doações</a>

              <a href="{{ route('postagens.create') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Fazer doações</a>

              <a href="{{ route('site.quem_somos.home') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Quem Somos?</a>

              
            </div>
          </div>
        </div>
        <div class=" md:block">
          <div class="ml-1  flex items-center md:ml-6">
           
            @if (Auth::user())

            <a href="{{ route('perfil.edit') }} " class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >PERFIL</a>
            
        @else
        <a href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
        <a href="{{ route('site.usuarios.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Registrar</a>
     

        @endif
        
             
              
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </nav>
  

    


<div class="container mt-3">
<div class="tudo">
<div class="row">
  
 <div class="col-4">
 <img id="imagem" class="img-thumbnail"  src="{{ url("storage/{$postagens->imagem}") }}">
 </div>

 <div class="col-8">
  <div class="input-group input-group-sm flex-nowrap">
  <p class="mt-5">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
      <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
    </svg> 
  </p>
<p  class="text-lg text-muted mt-5"> &nbsp;<strong> Doação:</strong> {{ $postagens->o_que_vai_doar }}</p>
  </div>

  <div class="input-group input-group-sm flex-nowrap" >
   <p class="mt-12"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
      <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
      <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/> 
    </svg>  
  </p>

  <p  class="text-lg text-muted mt-12">
   &nbsp;<strong> Tipo:</strong> {{ $postagens->tipo }}     
  </p>
  </div>
  <div class="input-group input-group-sm flex-nowrap" >
  <p class="mt-12">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
      <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
    </svg>
  </p>
  <p  class="text-lg text-muted mt-12">
   &nbsp;<strong> Disponivel : </strong> {{ $postagens->quantidade }}
  </p>
</div>

<div class="input-group input-group-sm flex-nowrap" >
  <p class="mt-12">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
      <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
    </svg> 
  </p>

  <p  class="text-lg text-muted mt-12"> &nbsp;<strong> Cidade: </strong>{{ $postagens->cidade }}</p>
</div>

<div class="input-group input-group-sm flex-nowrap" >
  <p class="mt-12">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
    </svg>
  </p>

  <p  class="text-lg text-muted mt-12"> &nbsp; <strong> bairro:</strong> {{ $postagens->bairro }}</p>
</div>


<div class="input-group input-group-sm flex-nowrap" >
  <p  class=" mt-12">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-compass-fill" viewBox="0 0 16 16">
      <path d="M15.5 8.516a7.5 7.5 0 1 1-9.462-7.24A1 1 0 0 1 7 0h2a1 1 0 0 1 .962 1.276 7.503 7.503 0 0 1 5.538 7.24zm-3.61-3.905L6.94 7.439 4.11 12.39l4.95-2.828 2.828-4.95z"/>
    </svg> 
  </p>

  <p  class=" text-lg text-muted mt-12"> &nbsp;<strong> rua: </strong> {{ $postagens->rua }}</p>
</div>
  </div>

    <div class="col-6">
    <div class="container  bg-gray-50 mt-3 " id="comentarios">
      <div class="comentarios">
        <div>
          <p class="text-muted text-lg"><strong>Comentários :</strong></p>
        <hr style="width: 90px; color:blue; height:3px;">
        </div>
        <div class="row">
          @foreach ($postagens->comentarios as $comentario )
          
          <div class="col-2 bg-white">
      <p class="imagem text-muted text-lg" id="iniciais">
          {{ $comentario->iniciais() }}
      </p>
          </div>
          <div class="col-10 bg-white ">
        <p class="comentario " id="texto_comentario">
         {{ $comentario->comentario }}
        </p>
          </div>
          <div  class="col-12 bg-white mb-12">
            <p style="padding-left:42px;" class="text-muted" id="user_comentario" >
            Autor : {{ $comentario->user->name }} em {{ $comentario->created_at->format('d/m/Y H:i') }}
            </p> 
            <br>
            
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
      
        <div class="form-group mt-12">
          <div id="deixe_sua_pergunta">
          <label for="comentario" class="text-muted text-lg"><strong>Deixe sua pergunta para o doador:</strong></label>
          </div>
          <textarea style="height: 70px;" name="comentario" id="comentario" class="form-control" cols="30" rows="10">{{ old('comentario') }}</textarea>
        </div>
      
        <button style="float: right" type="submit" class="btn btn-success mt-2 btn-sm">
        Enviar
        </button>
      </form>
      </div>
    </div>
</div>
    <div class="col-6"></div>
</div>
</div>
   @yield('footer')

</body>

</html>