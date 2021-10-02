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

                      <a href="{{ route('perfil.edit') }} " class="font-medium text-indigo-600 hover:text-indigo-500" >PERFIL</a>
                      
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

                      <a href="{{ route('perfil.edit') }} " class="font-medium text-indigo-600 hover:text-indigo-500" >PERFIL</a>
                      
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
    



    <div class="container mt-12">
      <h2 style="text-decoration: blue underline 4px;" class="featurette-heading font-bold text-center">Campanhas do agasalho</h2>
      
      <div class="row mb-2 mt-12">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-dark fs-3">CAMPANHA DO AGASALHO</strong>
              <h3 class="mb-0 text-muted"><strong>Birigui-Sp</strong></h3>
              <div class="mb-1 text-muted">25/08/2021 à 25/09/2021</div>
              <p class="card-text mb-auto mt-2">A campanha do agasalho em birigui foi anunciada essa tarde , com o ponto de recolhimento na <strong>rua coronel prudente correa N 279</strong></p>
              <a href="#" class="stretched-link"><strong style="color :blue">Ver mais</strong></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img  width="350" height="250" class="rounded" src="https://www.apeg.org.br/site2019/wp-content/uploads/2021/06/agasalho-campanha--1024x1024.png">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-dark fs-3">CAMPANHA DO AGASALHO</strong>
              <h3 class="mb-0 text-muted"><strong>Guararapes-Sp</strong></h3>
              <div class="mb-1 text-muted">10/08/2021 à 25/09/2021</div>
              <p class="mb-auto mt-2">A campanha do agasalho em birigui foi anunciada essa tarde , com o ponto de recolhimento <strong>Rua luis peron,N 242</strong></p>
              <a href="#" class="stretched-link"><strong style="color :blue">Ver mais</strong></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img width="350" height="250" class="rounded" src="https://radiosolaris.com.br/wp-content/uploads/2021/05/183872169_2871149763133463_5186723257750448330_n-1-1024x1024.jpg">
            </div>
          </div>
        </div>




        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-dark fs-3">CAMPANHA DO AGASALHO</strong>
              <h3 class="mb-0 text-muted"><strong>Araçatuba-Sp</strong></h3>
              <div class="mb-1 text-muted">25/08/2021 à 25/09/2021</div>
              <p class="card-text mb-auto mt-2">A campanha do agasalho em Araçatuba foi anunciada essa tarde , com o ponto de recolhimento na <strong>rua coronel prudente correa N 279</strong></p>
              <a href="#" class="stretched-link"><strong style="color :blue">Ver mais</strong></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img  width="350" height="250" class="rounded" src="https://oabbraganca.com.br/wp-content/uploads/2021/05/Subse%C3%A7%C3%A3o-de-Bragan%C3%A7a-Paulista-1-1024x1024.png">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-dark fs-3">CAMPANHA DO AGASALHO</strong>
              <h3 class="mb-0 text-muted"><strong>Rubiácea-Sp</strong></h3>
              <div class="mb-1 text-muted">10/08/2021 à 25/09/2021</div>
              <p class="mb-auto mt-2">A campanha do agasalho em Rubiácea foi anunciada essa tarde , com o ponto de recolhimento <strong>Rua luis peron,N 242</strong></p>
              <a href="#" class="stretched-link"><strong style="color :blue">Ver mais</strong></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img width="350" height="250" class="rounded" src="data:image/jpeg;base64,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">
            </div>
          </div>
        </div>
      </div>
      </div>

    
@yield('footer')        
    

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        
    </body>
    



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    




        
</html>
