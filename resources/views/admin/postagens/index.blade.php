<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        

        <title>Solidariedade</title>

        
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>


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
                  
                  <a href="{{ route('admin.home') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >Home</a>
    
                  <a href="{{ route('postagens.index') }}"  class="bg-blue-800 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Doações</a>
    
                  <a href="{{ route('postagens.create') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fazer doações</a>
    
                  <a href="{{ route('quemsomos') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Quem Somos?</a>
    
                  
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
               
    
                
                <div class="ml-3 relative">
                  <div>
                    <button type="button" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="sr-only">Open user menu</span>
                      <a href="{{ route('dashboard') }}" ><img class="h-10 w-10 rounded-full" src="{{ url('perfil.png') }}" >
                      </a>
                    </button>
                  </div>
    
                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </nav>
    

<main>


  
    <div class="">
<img width="100%" src="https://institutomarciliomarinho.com.br/wp-content/uploads/2020/02/Banner_Solidariedade-e1581343075635.png"  > 
    </div>
  

  <div class="album py-5 " id="fundo">
    <div class="container ">
      
      <nav class="navbar navbar-expand-lg navbar-light " id="prucurar_doar">
        <div class="container-fluid ">
          <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
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
   
  @foreach ($postagens as $postagem)
  <div style="top: 15%" class="modal fade" id="exampleModal_{{$postagem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-muted text-lg" id="exampleModalLabel"><strong>Doação: {{$postagem->o_que_vai_doar}}</strong></h5>
      
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div style="padding-left: 92%;" class="container">
          <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
            <svg width="20" height="20" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
            </svg>
          </button>
          </div>
          <div class="container">
<img style="padding-left:25% " width="300px"  src="https://static.zattini.com.br/produtos/tenis-salto-plataforma-bordado-fe-feminino/24/30G-0002-024/30G-0002-024_zoom1.jpg?ts=1614365212&ims=544x" >

        <a class="text-muted"><strong>Tipo:</strong></a> {{$postagem->tipo}}
         <br> 
        <br>
        <a class="text-muted"><strong>Quantidade:</strong></a> <a>{{$postagem->quantidade}}
        </a>
          </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary"><a class="link-light" href="{{route('postagens.show',$postagem->id)}}">ver mais</a></button>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="col-4 mt-4">
    <div class="card shadow-sm">
      <img src="{{ url("public/{$postagem->imagem}") }}" alt="{{ $postagem->o_que_vai_doar }}" class="img-fluid card-img-top" style="width: 25rem; height: 15rem;">
      <div class="card-body bg-light">
        <p class="card-text "><strong>{{ $postagem->o_que_vai_doar }}</strong><br>Tipo: {{ $postagem->tipo }}<br>Quantidade: {{ $postagem->quantidade }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm  btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$postagem->id}}">
              Ver mais
            </button>
            <a href="{{ route('postagens.edit', $postagem->id) }}" class="btn btn-sm btn-outline-dark ">Editar</a>
            <form action="{{ route('postagens.destroy',$postagem->id) }}" method="post">
              @csrf
              @method('delete')
              
              <button class="btn btn-sm btn-outline-danger" type="submit">
                 Apagar
              </button>
              

            </form>

          </div>
          <small class="text-muted">25/08/2021</small>
        </div>
      </div>
    </div>
  </div>
       
              
       
         
      
              @endforeach
              <nav aria-label="Page navigation example">
                <ul class="pagination mt-3">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
       </div>
</main>

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

  </body>
    
