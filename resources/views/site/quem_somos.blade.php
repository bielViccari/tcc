<!DOCTYPE html>
@extends('layouts.footer')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

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




   
    
 #insta:hover{
   color: deeppink;
 }

 #txt1
 {
  font-size:15px;
  font-family: 'Ubuntu Condensed', sans-serif;
 }

 #txt2
 {
  font-size:15px;
  font-family: 'Ubuntu Condensed', sans-serif;
 }
 #txt3
 {
  font-size:17px;
  font-family: 'Ubuntu Condensed', sans-serif;
 }
 #titulo
 {
  font-size:17px;
  font-family: 'Ubuntu Condensed', sans-serif;
 }
        </style>

    </head>
    <body>
      @yield('conteudo')
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
      
                    <a href="{{ route('postagens.index') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Doa????es</a>
      
                    <a href="{{ route('postagens.create') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Fazer doa????es</a>
      
                    <a href="{{ route('site.quem_somos.home') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Quem Somos?</a>
      
                    
                  </div>
                </div>
              </div>
              <div class=" md:block">
                <div class="ml-1  flex items-center md:ml-6">
                 
                  @if (Auth::user())
    
                  <a id="a" href="{{ route('perfil.edit') }} " class="text-white hover:text-white px-3 py-2 rounded-md text-sm font-medium" >perfil</a>
                  
              @else
              <a id="a"  href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
              <a id="a" href="{{ route('site.usuarios.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Registrar</a>
           
    
              @endif
              
                   
                    
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </nav>
      
        
       <img src="{{ url('quemsomos.png') }}">

       
       <div class="container mt-12 mb-12">
         <div class="row">


<div class="col-4">
  <center> <img width="50" height="50" src="{{ url('alvo.png') }}" alt=""></center>
   <center><p><strong>OBJETIVO</strong></p></center>
   <p id="txt1" class="text-muted">Nosso objetivo ?? facilitar a forma de doar roupas e ajudara institui????es, devido ?? pandemia, fazendo a gente utilizar a internet n??o s?? para ver redes sociais, mas sim para fazer muitas coisas que n??s levava-mos tempo para fazer , sem sair de casa</p>
</div>


<div class="col-4" id="meio">
  <center><img width="50" height="50" src="{{ url('trabalho-em-equipe.png') }}" alt=""></center>
 <center> <p><strong>QUEM SOMOS?</strong></p></center>
 <p id="txt2" class="text-muted">Site planejado e desenvolvido em 2021 pelos alunos da Etec de Ara??atuba ext. de Guararapes : Kathlen Moraes, Gabriel Viccari, Nycoly Garcia, Letic??a Val??rio, Brena Oliveira. Com auxilio do professor de produ????o e desenvolvimento do trabalho de conclus??o de curso (PDTCC) Carlos domingues Granja, e o professor de Programa????o de aplicativos Mobile (PAM), Programa????o Web (PW), Lucas Anjos dos Santos. </p>
</div>


<div class="col-4">
 <center> <img width="50" height="50" src="{{ url('midia-social.png') }}" alt=""></center>
  <center><p><strong>REDES SOCIAIS</strong></p></center>
  <div class="mycontainer" style="display: flex;margin-left:150px;">
  
    <span>
  <img  src="{{ url('faceicon.png') }} " width="20" height="20">
    </span>
    <span id="txt3"><a href="#"><strong style="color:;">&nbsp Facebook</strong></a></span>
  </div>
<div class="mycontainer" style="display: flex;margin-left:150px;">   
    <span>
      <img id="insta_foto" src="{{ url('insta.png') }} " width="20" height="20">
        </span>
        <span id="txt3"><a id="insta" style="" href="#"><strong style="color;">&nbsp Instagram</strong></a></span>
      </div>

        

<div class="mt-12">
    <center><p><svg style="" xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg><strong><a style="padding-left: 3%;">CONTATO:</strong><a></p></center>
</div>
      <div class="mycontainer mt-3" style="display: flex;margin-left:150px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
        </svg>
  <p id="txt2" class="text-muted">&nbsp solidariedade@gmail.com</p>
      </div>
  <div class="mycontainer mt-1" style="display: flex;margin-left:150px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg><p id="txt2" class="text-muted">&nbsp (18)996798777</p>
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