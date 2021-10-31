<!DOCTYPE html>
@extends('layouts.footer')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        

        <title>@yield('titulo')Solidariedade</title>

        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        
   
<style type='text/css'>
    * { margin: 0; padding: 0; }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

    .featurette-heading {
    font-size: 50px;
  }
    
    .featurette-heading {
  font-weight: 300;
  line-height: 1;
  
  letter-spacing: -.05rem;
}
        </style>

    </head>
    <body>
      
     
     @yield('conteudo')
     
     <div class="relative bg-white overflow-hidden">
      <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
    
          <div>
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
              <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="{{ route('site.home') }}">
                      
                      <img class="h-8 w-auto sm:h-10" src="{{ url('solidariedade.png')  }}">
                    </a>
                    <div  class="mr-auto w-auto flex items-center md:hidden">
                      

                  <a href="{{ route('postagens.index') }}" class="font-medium text-gray-500 hover:text-gray-900">Doações</a>
    
                  <a href="{{ route('postagens.create') }}" class="font-medium text-gray-500 hover:text-gray-900">Fazer doações</a>
    
                  <a href="{{ route('site.quem_somos.home') }}" class="font-medium text-gray-500 hover:text-gray-900">Quem Somos?</a>
   
                  @if (Auth::user())

                      <a href="{{ route('perfil.edit') }} " class="font-medium text-indigo-600 hover:text-indigo-500" >perfil</a>
                      
                  @else
                  <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Login</a>
                  <a href="{{ route('site.usuarios.create') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Registrar</a>
               

                  @endif
 
                    </div>
                  </div>
                </div>
                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

                  

                  <a href="{{ route('postagens.index') }}" class="font-medium text-gray-500 hover:text-gray-900">Doações</a>
    
                  <a href="{{ route('postagens.create') }}" class="font-medium text-gray-500 hover:text-gray-900">Fazer doações</a>
    
                  <a href="{{ route('site.quem_somos.home') }}" class="font-medium text-gray-500 hover:text-gray-900">Quem Somos?</a>
   
                  @if (Auth::user())

                      <a href="{{ route('perfil.edit') }} " class="font-medium text-indigo-600 hover:text-indigo-500" >perfil</a>
                      
                  @else
                  <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Login</a>
                  <a href="{{ route('site.usuarios.create') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Registrar</a>
               

                  @endif
 
                   </div>
              </nav>
            </div>

          </div>
    
          <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
            <div class="sm:text-center lg:text-left">
              <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">SITE DE DOAÇÕES</span>
                <span class="block text-red-600 xl:inline">ONLINE</span>
              </h1>
              
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                A melhor recompensa por uma boa ação não se faz expressada aos olhos de todos, mas sim que é representada pelo sorriso de quem recebeu.
              </p>
              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                
              </div>
            </div>
          </main>
        </div>
      </div>
      <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://institutoreacao.org.br/wp-content/uploads/2020/12/Como-ensinar-e-estimular-a-solidariedade-nas-criancas.jpg" alt="">
      </div>
    </div> 




              







 <div class="container">
    <div class="row featurette ml-3 mt-12">
      <div class="col-md-7">
        <h2 class="featurette-heading font-bold">Ajude a acabar com a pobreza <span class="text-blue-700">em toda america latina.</span></h2>
        <p class="lead mt-4">a <a class="text-blue-500" href="https://www.techo.org/brasil/doar/" target="_blank">TETO</a> é uma organização da sociedade civil, sem fins lucrativos, que funciona graças à contribuição econômica das empresas, à cooperação internacional e a doações de pessoas como você.</p>
      </div>
      <div class="col-md-5">
       <img width="500" height="500" src="data:image/png;base64,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" alt="">
      </div>
    </div>

    

    <div class="row featurette mt-3">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading font-bold">Distribua junto com a GreenPeace alimentos <span class="text-green-800">saudáveis para quem precisa.</span></h2>
        <p class="lead mt-4">O <a class="text-green-600 link-success" href="https://doe.greenpeace.org.br" target="_blank"> Greenpeace</a> é uma organização internacional sem fins lucrativos e totalmente financiada por seus apoiadores. Não aceitam dinheiro de empresas e governos com o objetivo de manter a independência de sua atuação.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img width="500" height="500" src="data:image/png;base64,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" alt="">
      </div>
    </div>

    

    <div class="row featurette ml-3 mt-3">
      <div class="col-md-7">
        <h2 class="featurette-heading font-bold">Ajude os animais doando para o<span class="text-blue-900"> Instituto Luisa Mell</span></h2>
        <p class="lead">O <a class="link-primary text-blue-500" href="https://ilm.org.br/doe" target="_blank">Institulo Luisa Mell</a> acredita que todos os animais merecem ter qualidade de vida, e por isso atua com o resgate de animais em situações de risco, promovendo a recuperação e incentivando a adoção. Tão importante quanto oferecer uma nova chance a quem foi maltratado e abandonado, é a conscientização da sociedade sobre a causa animal.</p>
      </div>
      <div class="col-md-5">
        <img width="500" height="500" src="https://pbs.twimg.com/profile_images/614445020603510784/C0CjNPO5.png" alt="">
      </div>
    </div>
  </div>
    



   

    
@yield('footer')        
    

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        
    </body>
    



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    




        
</html>
