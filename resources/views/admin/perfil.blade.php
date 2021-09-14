<html>
  @extends('layouts.footer')
     <head>
        <title>Perfil</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<link rel="stylesheet" href=" sweetalert2/package/dist /sweetalert2.min.css">
<script src="sweetalert2/package/dist /sweetalert2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            #linha-sobre
            {
                height: 2px;
                color: rgb(1, 1, 104)
            }
            

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
        <body class="bg-gray-100">
           

          
    <nav class="bg-blue-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="{{ url('solidariedade.png') }}" alt="Workflow">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                
                
                <a href="{{ route('admin.home') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>
  
                <a href="{{ route('postagens.index') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Doações</a>
  
                <a href="{{ route('postagens.create') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Fazer doações</a>
  
                <a href="{{ route('site.quem_somos.home') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Quem Somos?</a>
  
                
              </div>
            </div>
          </div>
        
            
                        
                        <div class="ml-3 relative">
                          <div>
                            
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                              <button type="submit" class="mt-3 text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >Sair</button>
                              </form>
                            </button>
                          </div>
            
                          
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </nav>





@if (Auth::user()->id)
<div class="container mb-12 mt-12">
  <div class="row">
    <div class="col-3 mx-auto bg-white shadow rounded">
        <div class="input-group input-group-sm flex-nowrap">
      <p class="text-muted mt-3"><strong>Detalhes da conta </strong></p> 
      
      <p class="mt-3" style="padding-left: 45%;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg><p>
        </div>
        <hr width="170px" style="height: 3px; color: blue ;">
          <div class="container mt-3 mb-4" style="padding-left: 23%">
          <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="{{ url('kathlen.jfif') }}"> 
           <div class="mt-1" style="padding-left:50%">
               <button class="btn-sm btn btn-outline-success">Alterar</button>
          </div>
      </div>
     <hr style="color: rgb(23, 37, 116); height:2px;">
     <div class="container">
      <p class="text-muted mt-1"><strong> Editar conta </strong></p>
      <form enctype="multipart/form-data" action="#" method="POST">
          @csrf
          
      
   </div>

   <div class="container mt-2">
   <div class="input-group input-group-sm flex-nowrap">
    <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
      </svg></span>
    <input type="text" id="name" name="name" class="form-control" placeholder="{{ $user->name }}" aria-label="name" aria-describedby="addon-wrapping">
  </div>
   </div>

   <div class="container mt-2">
      
      <div class="input-group input-group-sm flex-nowrap">
          <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
            </svg></span>
          <input type="text" id="email" name="email" class="form-control" placeholder="{{ $user->email }}" aria-label="email" aria-describedby="addon-wrapping">
        </div>
   </div>

   <div class="container mt-2">
       
    <div class="input-group input-group-sm flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
          </svg></span>
        <input type="password" id="password" name="password" class="form-control" placeholder="senha" aria-label="senha" aria-describedby="addon-wrapping">
      </div>
   
 </div>

 <div class="container mt-2">
      
   
    <div class="input-group input-group-sm flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
          </svg></span>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="confirmar senha" aria-label="Confirmar-senha" aria-describedby="addon-wrapping">
      </div>
</div>

   <div class="container mt-2">
      
      

   <div class="container mt-2">
      
      
   </div>

   <div class="container mt-2">
      
   </div>
          <div class="d-grid justify-content-md-end mb-12">
          <button type="submit" style="" class="btn btn-sm btn-outline-warning mt-1">Salvar </button>
          </div>
   </div>
  </form>
</div>

 


    <div class="col-8 mx-auto  bg-white shadow rounded">
      
        <div class="input-group mt-3 input-group-sm flex-nowrap">
          <a class="text-muted mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="mt-3" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
              <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
            </svg></a>
            <p class="text-muted "><strong>&nbsp; Atividades da Conta</strong></p>
            
           </div>
<hr width="250px" style="height: 3px; color: blue ;">
           <div class=" mt-12">
            <div class="container mt-1" >
              <div class="row">
              <div class="col-md-2">
              <img class=" rounded mt-0 " width="200" height="150" src="https://malaprontagramado.com.br/wp-content/uploads/2020/04/roupas-para-natal-luz.jpg" </img>
              </div>
            <div class="col-md-3 mt-0">
            <p class="text-muted"><strong> Publicou uma doação:</strong> </p>
            <p class="text-muted">Titulo: tenis</p>
            <p><small class="text-muted"> 20/08/2020 às 18:15</small></p>
            </div> 
            <div class="col-md-4 mt-11">
             <button class="btn btn-outline-danger btn-sm">apagar</button>
            </div>
            <hr class="mt-2 " style="width: 450px;">
          </div>  
          </div>    
            </div>

            <div class=" mt-12">
              <div class="container mt-1" >
                <div class="row">
                <div class="col-md-2">
                <img class=" rounded mt-0 " width="200" height="150" src="https://malaprontagramado.com.br/wp-content/uploads/2020/04/roupas-para-natal-luz.jpg" </img>
                </div>
              <div class="col-md-3 mt-0">
              <p class="text-muted"><strong> Publicou uma doação:</strong> </p>
              <p class="text-muted">Titulo: tenis</p>
              <p><small class="text-muted"> 20/08/2020 às 18:15</small></p>
              </div>
              <div class="col-md-4 mt-11">
                <button class="btn btn-outline-danger btn-sm">apagar</button>
               </div> 
              <hr class="mt-2" style="width: 450px;">
            </div>  
            </div>    
              </div>
              <div class=" mt-12">
                <div class="container mt-1" >
                  <div class="row">
                  <div class="col-md-2">
                  <img class=" rounded mt-0 " width="200" height="150" src="https://malaprontagramado.com.br/wp-content/uploads/2020/04/roupas-para-natal-luz.jpg" </img>
                  </div>
                <div class="col-md-3 mt-0">
                <p class="text-muted"><strong> Publicou uma doação:</strong> </p>
                <p class="text-muted">Titulo: tenis</p>
                <p><small class="text-muted"> 20/08/2020 às 18:15</small></p>
                </div> 
                <div class="col-md-4 mt-11">
                  <button class="btn btn-outline-danger btn-sm">apagar</button>
                 </div>
                <hr class="mt-2" style="width: 450px;">
              </div>  
              </div>    
                </div>
                <div class=" mt-12">
                  <div class="container mt-1" >
                    <div class="row">
                    <div class="col-md-2">
                    <img class=" rounded mt-0 " width="200" height="150" src="https://malaprontagramado.com.br/wp-content/uploads/2020/04/roupas-para-natal-luz.jpg" </img>
                    </div>
                  <div class="col-md-3 mt-0">
                  <p class="text-muted"><strong> Publicou uma doação:</strong> </p>
                  <p class="text-muted">Titulo: tenis</p>
                  <p><small class="text-muted"> 20/08/2020 às 18:15</small></p>
                  </div>
                  <div class="col-md-4 mt-11">
                    <button class="btn btn-outline-danger btn-sm">apagar</button>
                   </div> 
                  <hr class="mt-2" style="width: 450px;">
                </div>  
                </div>    
                  </div>
                  <div class=" mt-12">
                    <div class="container mt-1" >
                      <div class="row">
                      <div class="col-md-2">
                      <img class=" rounded mt-0 " width="200" height="150" src="https://malaprontagramado.com.br/wp-content/uploads/2020/04/roupas-para-natal-luz.jpg" </img>
                      </div>
                    <div class="col-md-3 mt-0">
                    <p class="text-muted"><strong> Publicou uma doação:</strong> </p>
                    <p class="text-muted">Titulo: tenis</p>
                    <p><small class="text-muted"> 20/08/2020 às 18:15</small></p>
                    </div> 
                    <div class="col-md-4 mt-11">
                      <button class="btn btn-outline-danger btn-sm">apagar</button>
                     </div>
                    <hr class="mt-2" style="width: 450px;">
                  </div>  
                  </div>  
                   
                    </div>

                    
                    
          

    </div>
    

  </div>
  
</div>

@else
<a>jajá crio a parte para os usuarios verem
@endif
              
                  

              
              

             @yield('footer')
        </body>
</html>
