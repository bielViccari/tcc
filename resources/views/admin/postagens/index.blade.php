<!DOCTYPE html>
@extends('layouts.footer')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        

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

 
#fundo
{
  background-color:
}
#procurar_doar
{
  background-color: 
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
          <div class="md:block">
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
    
    

<main>


  
    <div class="">
<img height="1600px" width="1600px" src="https://institutomarciliomarinho.com.br/wp-content/uploads/2020/02/Banner_Solidariedade-e1581343075635.png"  > 
    </div>
  

  <div class="album py-5 " id="fundo">
    <div class="container  ">
      
      <nav class="navbar navbar-expand-lg navbar-light " id="prucurar_doar">
        <div class="container-fluid ">
          
          <div class=" navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <form class="d-flex">
                <input class=" form-control me-1 " type="search" placeholder="Buscar" aria-label="Search">
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

      @if (Auth::user()->id <> $postagem->user_id)
     
      @endif
              @endforeach
             
           
      
           
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
      {{$postagens->links()}}
</div>
</div>
</main>

@yield('footer')

  </body>
    
