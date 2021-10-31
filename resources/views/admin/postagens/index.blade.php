<!DOCTYPE html>
@extends('layouts.footer')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

        <title>Solidariedade</title>

        
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
               
        
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
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}
#btn_anchor
{

  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #3339e8;
  
}
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');


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
              <div class=" md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  
                  
                  <a href="{{ route('site.home') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>
    
                  <a href="{{ route('postagens.index') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Doações</a>
    
                  <a href="{{ route('postagens.create') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Fazer doações</a>
    
                  <a href="#"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Quem Somos?</a>
    
                  
                </div>
              </div>
            </div>
            <div class=" md:block">
              <div class="ml-1  flex items-center md:ml-6">
               
                @if (Auth::user())

                <a href="{{ route('perfil.edit') }} " class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >perfil</a>
                
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
    


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ url('slide1.png') }}" width="100%" height="100%" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              
              <p><a id="btn_anchor" class="ml-12 btn btn-sm " href="#anchor"><img class="mt-2" src="{{ url('seta-para-baixo.png') }}" alt=""></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <img src="https://portalresiduossolidos.com/wp-content/uploads/2014/05/Sistema-de-coleta-de-roupas-e-cal%C3%A7ados-usados-na-Alemanha-1.jpg" width="100%" height="100%" alt="">
          <div class="container">
            <div class="carousel-caption">
              
              <p><a class="btn btn-sm btn-primary" href="{{ route('postagens.create') }}">Doe agora.</a></p>
            </div>
          </div>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    


    
    
    
<main>



   
  

  <div class="album  " id="fundo">
    <div class="container  ">
      
      <nav class="navbar navbar-expand-lg navbar-light " id="prucurar_doar">
        <div class="container-fluid ">
          
          <div class=" navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


              <form method="post" action="{{ route('postagens.search') }}" class="d-flex">
                @csrf
                <input class=" form-control me-1 " value="{{ old('pesquisa') }}" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="  btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
              </form>


            </ul>
            <form class="d-flex">
              <a class="" href="{{ route('postagens.create') }}"><svg style="color:#1e3a8a;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
              </svg> </a>
            </form>
          </div>
        </div>
      </nav>



      @if ($mensagem= Session::get('mensagem'))
      <div class="alert alert-success" >
        <p>{{ $mensagem }}</p>
      </div>
 @endif
 <div class="row">
  
  <p class="text-muted text-lg"><strong>Minhas Doações</strong></p>
  @foreach ($postagens as $postagem)      
  @if (Auth::user()->id === $postagem->user_id)
  
  <div class="col-3 mt-3">
    <div class="card shadow-sm">
      <img src="{{ url("storage/{$postagem->imagem}") }}" alt="{{ $postagem->o_que_vai_doar }}" class="img-fluid card-img-top" style="width: 25rem; height: 15rem;">
      <div class="card-body bg-light">
        <p class="card-text "><strong>{{ $postagem->o_que_vai_doar }}</strong><br>
          <br>
          <br>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            
            

<a class="btn btn-sm btn-outline-primary" href="{{route('postagens.show',$postagem->id)}}">ver mais</a>
<a href="{{ route('postagens.edit', $postagem->id) }}" class="btn btn-sm btn-outline-warning ">Editar</a>
<form action="{{ route('postagens.destroy',$postagem->id) }}" method="post">
  @csrf
  @method('delete')
  
  <button class="btn btn-sm btn-outline-danger" type="submit">
     Apagar
  </button>
</form>

           
            
          </div>
          <small class="text-muted">{{ $postagem->created_at->format('d/m/Y ') }}</small>
        </div>
      </div>
    </div>
  </div>
       
  
       
         
      @endif

     
              @endforeach
             
           
      
              <div id="anchor"></div>   
       <p class="text-muted text-lg mt-12"><strong>Doações</strong></p>
       @foreach ($postagens as $postagem)      
       @if (Auth::user()->id <> $postagem->user_id)
       <div class="col-3 mt-3">
        <div class="card shadow-sm">
          <img src="{{ url("storage/{$postagem->imagem}") }}" alt="{{ $postagem->o_que_vai_doar }}" class="img-fluid card-img-top" style="width: 25rem; height: 15rem;">
          <div class="card-body bg-light">
            <p class="card-text "><strong>{{ $postagem->o_que_vai_doar }}</strong><br>
              <br>
              <br>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                
                
    
    <a class="text link-primary" href="{{route('postagens.show',$postagem->id)}}">ver mais</a>
    
    
              </div>
              <small class="text-muted">{{ $postagem->created_at->format('d/m/Y ') }}</small>
            </div>
          </div>
        </div>
      </div>
      

      
      
      
       
            
              
       @endif
                   @endforeach
<div class="justify-content-left d-flex">
  @if (isset($filters))
{{ $postagens->appends($filters)->links() }}      
  @else   
  {{$postagens->links()}}
  @endif
</div>
</div>
</main>

@yield('footer')

  </body>
    
