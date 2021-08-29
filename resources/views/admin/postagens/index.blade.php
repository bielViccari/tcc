<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        

        <title>Solidariedade</title>

        
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
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
    
                  <a href="{{ route('quem_somos') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Quem Somos?</a>
    
                  
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
                <button class="  btn btn-outline-success" type="submit">Procurar</button>
              </form>
            </ul>
            <form class="d-flex">
              <a class="btn btn-outline-primary" href="{{ route('postagens.create') }}"> Nova doação </a></button>
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
  
  <div class="col-4 mt-4">
    <div class="card shadow-sm">
      <img src="{{ url("storage/{$postagem->imagem}") }}" alt="{{ $postagem->o_que_vai_doar }}" class="img-fluid card-img-top" style="width: 25rem; height: 15rem;">
      <div class="card-body bg-light">
        <p class="card-text "><strong>{{ $postagem->o_que_vai_doar }}</strong><br>Tipo: {{ $postagem->tipo }}<br>Quantidade: {{ $postagem->quantidade }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="{{ route('postagens.show', $postagem->id) }}" class="btn btn-sm btn-outline-success">Ver</a>
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
    
