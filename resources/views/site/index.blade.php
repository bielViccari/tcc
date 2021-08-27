<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        

        <title>@yield('titulo')Solidariedade</title>

        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style type='text/css'>
    * { margin: 0; padding: 0; }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');


#quem_somos
{
  
  text-decoration: underline;
  

}

.blog-post 
{
 
  
}

#titulo
{
  text-decoration: overline lightgray;
}
 .body-post-title
 {
   text-decoration: overline;
 }

#img1
{
  border-radius: 10px 10px 10px 10px;
}  


.container
{
  background-color: white;
}
 
#carousel
{
  left: 4%;
  width: 92%;
}

#p1
{
  padding-top: 5%;
}

#img2
{
  border-radius: 10px 10px 10px 10px;
}

#myFooter{
    padding-top:32px;
    background-color: #1342fd;
}

#myFooter .container{
    text-align: center;
    background-color: #1342fd;
    
}

#myFooter .footer-copyright{
    margin-bottom: 35px;
    text-align: center;
    color: whitesmoke;
    text-decoration: overline;
}

#myFooter ul{
    list-style-type: none;
    padding: 0;
    margin-bottom: 18px;
}

#myFooter a{
    color: #282b2d;
    font-size: 18px;
}

#myFooter li{
    display: inline-block;
    margin: 0px 15px;
    line-height: 2;
}

#myFooter .footer-social{
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
    background-color: rgb(0, 47, 255);
}

#myFooter .fa{
    font-size: 36px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: rgba(50, 70, 255, 0.89);
    color: #d0d0d0;
    border-radius: 51%;
    padding: 10px;
    height: 60px;
    width: 60px;
    text-align: center;
    line-height: 43px;
    text-decoration: none;
    transition:color 0.2s;
}

#myFooter .fa-facebook:hover{
   color: #2b55ff;
}

#myFooter .fa-facebook:focus{
    color: #2b55ff; 
}

#myFooter .fa-instagram:hover{
    color:DeepPink;
}

#myFooter .fa-instagram:focus{
    color: DeepPink;
}


#myFooter .fa-google:hover{
    color:red;
}

#myFooter .fa-google:focus{
    color:red;
}




#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}


.circle-icons {

  padding: 10px; 

  font-size: 18px;

  width: 18px; 

  text-align: center;

  text-decoration: none;

  margin: 5px 2px; 

  border-radius: 50%;  

  background: #f0e9e9; 

  color: #fff; 

}


.circle-icons:hover {

    background: #ccc; 

    color: #fff;  

    opacity: 0.7;

}

#img_post
{
  padding-top: 10px;
  border-radius:  10px 10px ;
}

#a
{
  color: #282b2d;
}

#navigation
{
  background-color:
}
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #727272;
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
                    <div class="-mr-2 flex items-center md:hidden">
                      <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        
                       
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

                  

                  <a href="{{ route('postagens.index') }}" class="font-medium text-gray-500 hover:text-gray-900">Doações</a>
    
                  <a href="{{ route('postagens.create') }}" class="font-medium text-gray-500 hover:text-gray-900">Fazer doações</a>
    
                  <a href="{{ route('site.quem_somos.home') }}" class="font-medium text-gray-500 hover:text-gray-900">Quem Somos?</a>
    
                  <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Login</a>
                  <a href="{{ route('site.usuarios.create') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Registrar</a>
                </div>
              </nav>
            </div>
    
            



            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
              <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                  <div>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                  </div>
                  <div class="-mr-2">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                      <span class="sr-only">Close main menu</span>
                      
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Doações</a>
    
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Fazer doações</a>
    
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Quem Somos</a>
    
                  
                </div>
                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                  Login
                </a>
                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                  Registrar
                </a>
              </div>
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
    <div class="row mb-2 mt-12">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Campanha do agasalho</strong>
            <h3 class="mb-0">Birigui-Sp</h3>
            <div class="mb-1 text-muted">25/08/2021 à 25/09/2021</div>
            <p class="card-text mb-auto mt-2">A campanha do agasalho em birigui foi anunciada essa tarde , com o ponto de recolhimento na <strong>rua coronel prudente correa N 279</strong></p>
            <a href="#" class="stretched-link"><strong style="color :blue">Ver mais</strong></a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img width="293" height="250" src="https://www.folhadaregiao.com.br/wp-content/uploads/2021/07/Agenda-723x570.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Campanha do agasalho</strong>
            <h3 class="mb-0">Guararapes-Sp</h3>
            <div class="mb-1 text-muted">10/08/2021 à 25/09/2021</div>
            <p class="mb-auto">A campanha do agasalho em birigui foi anunciada essa tarde , com o ponto de recolhimento <strong>Rua luis peron,N 242</strong></p>
            <a href="#" class="stretched-link"><strong style="color :blue">Ver mais</strong></a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img width="350" height="250" src="https://www.folhadaregiao.com.br/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-01-at-18.01.59.jpeg">
          </div>
        </div>
      </div>
    </div>
    </div>
<footer id="myFooter">
<div class="container">

<p class="footer-copyright">© 2021 Copyright - Solidariedade</p>
</div>
<div class="footer-social">
<a href="#" class="circle-icons fa fa-facebook"></a>
<a href="#" class="circle-icons fa fa-instagram"></a>
<a href="#" class="circle-icons fa fa-google"></a>
</div>
</footer>
    
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        
    </body>
    



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    




        
</html>
