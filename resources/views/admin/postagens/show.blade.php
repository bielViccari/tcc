<!DOCTYPE html>
@extends('layouts.footer')
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Solidariedade</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
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
  font-family: 'Goldman', cursive;
  font-size: 15px;
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
  margin-top:;
  
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


#imagem_doacao
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
 
  <div> 
    <nav class="bg-blue-900 fixed-top">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="{{ url('solidariedade.png') }}" alt="Workflow">
            </div>
            <div class=" md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                
                
                <a href="{{ route('site.home') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>
  
                <a href="{{ route('postagens.index') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Doações</a>
  
                <a href="{{ route('postagens.create') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Fazer doações</a>
  
                <a href="{{ route('site.quem_somos.home') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Quem Somos?</a>
  
                
              </div>
            </div>
          </div>
          <div class=" md:block">
            <div class="ml-1  flex items-center md:ml-6">
             
              @if (Auth::user())

              <a id="a" href="{{ route('perfil.edit') }} " class="text-white hover:text-white px-3 py-2 rounded-md text-sm font-medium" >perfil</a>
              
          @else
          <a id="a" href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
          <a id="a" href="{{ route('site.usuarios.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Registrar</a>
       

          @endif
          
               
                
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </nav>
  
  




<div class="info mt-3">
  <center><p class="text-lg "><strong>informações do produto</strong></p>
  <hr style="width: 130px; color:blue; height:3px;"></center>
</div>


<div class="row mt-5" style="margin-left:20%;">
  
  <div class="col-8">
  <article class="row produtos-compra">
    <figure class="col-md-7 ">
      <img style="width: 350px; height:400px;" src="{{ url("storage/{$postagens->imagem}") }}" class="img-fluid">
    </figure>

    <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
      
      <article class="produtos-conteudo">
        <h1 class="text-lg mb-1"><strong>{{ $postagens->o_que_vai_doar }}</strong></h1>
        
        
        <p class="text-muted mt-2"><strong> tipo de doação</strong></p>
       
         <p> {{ $postagens->tipo }}</p>
         

         <p class="mt-2"><strong>Cidade</strong></p>
         
         <p> {{ $postagens->cidade }}</p>
         
         
         <p class="mt-2"><strong> Endereço</strong></p>
         
         <p>{{ $postagens->bairro }}
         
         {{ $postagens->rua }}
        </p>

        <p><strong>Quantidade Disponível</strong></p>
        <p><strong>{{ $postagens->quantidade }}</strong></p>
      </article>

      <article class="produtos-preco">
        

        

        
          <a href="#comentario" class="btn btn-success col-md-12">Converse c/ doador </a>
        
       


      </article>
    
  </div>



    

 


 
  
  <div class="row" style="padding-right: 27%;">
      <div class="mb-12">
      <div class="container mt-3 " id="comentarios">
        <div class="comentarios">
          <div class="mb-3">
            <p class="text-muted text-lg"><strong>Comentários :</strong></p>
          <hr class="" style="width: 60px; color:blue; height:3px;">
          </div>
          <div class="row">
            

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

    

            @foreach ($postagens->comentarios as $comentario )
            

            
            <div class="col-2 bg-gray-50">
        <p class="imagem text-muted text-lg mt-12 " id="iniciais">
            {{ $comentario->iniciais() }}
        </p>
            </div>
            <div class="col-10 bg-gray-50 ">
              @if (Auth::user()->id ===$comentario->user_id)
                  
              
              <form action="{{ route('comentarios.destroy',$comentario->id) }}" method="post">
                @csrf
                @method('delete')
                
                <button style="margin-left: 95%;" class="btn mb-1 mt-1 btn-sm btn-danger" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                  </svg>
                </button>
              </form>
              @endif
          <p class="comentario " id="texto_comentario">
           {{ $comentario->comentario }}
          </p>
            </div>
            <div  class="col-12 bg-gray-50 mb-2">
             
              <p style="padding-left:42px;" class="text-muted" id="user_comentario" >
             
             
                Autor : {{ $comentario->user->name }} em {{ $comentario->created_at->format('d/m/Y H:i') }}
            
             
            </p> 
              
              
              
              
            </div>
          
            @endforeach
            <form method="POST" class="row g-2" action="{{ route('comentarios.store') }}">
              @csrf
                <input type="hidden" name="postagem_id" value="{{ $postagens->id }}">
              
                <label for="comentario" class="text-muted text-lg text-center"><strong>Faça um comentario</strong></label>
                  <div class="col-auto input-group-sm mb-2" style="padding-left: 33%;">
                    <input  name="comentario" class="form-control" id="comentario" >
                  </div>
                 
                  <div class="col-auto">
                    <button type="submit" class="btn btn-sm btn-primary mb-3">Comentar</button>
                  </div>
                
              </form>
            </section>

   
          </article>        
          </div>

          </div>
        </div>
        
        
        
        
        
        </div>
      </div>
  </div>




  


   @yield('footer')

</body>

</html>