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
    padding-top:32px;
    background-color: #0505a2;
}

#myFooter .container{
    text-align: center;
    background-color: #0505a2;
}

#myFooter .footer-copyright{
    margin-bottom: 35px;
    text-align: center;
    color:whitesmoke;
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
    background-color: #00008B;
}

#myFooter .fa{
    font-size: 36px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: rgb(0, 17, 255);
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
                    
                    <a href="{{ route('site.home') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>
      
                    <a href="{{ route('postagens.index') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Doações</a>
      
                    <a href="{{ route('postagens.create') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fazer doações</a>
      
                    <a href="#" class="bg-blue-800 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page" >Quem Somos?</a>
      
                    
                  </div>
                </div>
              </div>
              <div class="hidden md:block">
                <div class="ml-1  flex items-center md:ml-6">
                 
      
              
                    <div>
                     
                        <a href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Login 
                        </a>
                    
                    </div>
                    <div class=" ">
                      <div>
                        
                          <a href="{{ route('site.usuarios.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium" >&nbspcadastrar 
                          </a>
                        
                      </div>
      
                    
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
   <p class="text-muted">Nosso objetivo é facilitar a forma de doar roupas e ajudara instituições, devido à pandemia, fazendo a gente utilizar a internet não só para ver redes sociais, mas sim para fazer muitas coisas que nós levava-mos tempo para fazer , sem sair de casa</p>
</div>


<div class="col-4" id="meio">
  <center><img width="50" height="50" src="{{ url('trabalho-em-equipe.png') }}" alt=""></center>
 <center> <p><strong>QUEM SOMOS?</strong></p></center>
 <p class="text-muted">Site planejado e desenvolvido em 2021 pelos alunos da Etec de Araçatuba ext. de Guararapes : Kathlen Moraes, Gabriel Viccari, Nycoly Garcia,Leticía Valério,Brena Oliveira. E com auxilio do professor de produção e desenvolvimento do trabalho de conclusão de curso(PDTCC) Carlos domingues Granja </p>
</div>


<div class="col-4">
 <center> <img width="50" height="50" src="{{ url('midia-social.png') }}" alt=""></center>
  <center><p><strong>REDES SOCIAIS</strong></p></center>
  <div class="mycontainer" style="display: flex;margin-left:150px;">
  
    <span>
  <img  src="{{ url('faceicon.png') }} " width="20" height="20">
    </span>
    <span><a href="#"><strong style="color:;">&nbsp Facebook</strong></a></span>
  </div>
<div class="mycontainer" style="display: flex;margin-left:150px;">   
    <span>
      <img  src="{{ url('insta.png') }} " width="20" height="20">
        </span>
        <span><a href="#"><strong style="color;">&nbsp Instagram</strong></a></span>
      </div>

        

<div class="mt-12">
    <center><p><strong>CONTATO:</strong></p></center>
</div>
      <div class="mycontainer " style="display: flex;margin-left:150px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
        </svg>
  <p class="text-muted">&nbsp solidariedade@gmail.com</p>
      </div>
  <div class="mycontainer mt-1" style="display: flex;margin-left:150px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg><p class="text-muted">&nbsp (18)996798777</p>
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