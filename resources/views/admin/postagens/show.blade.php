<!DOCTYPE html>
@extends('layouts.footer')
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Solidariedade</title>

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

#deixe_sua_pergunta
{
  
  
}
#iniciais
{
  margin-left: 30px;
  margin-top: 20px;
  border: 1px solid rgb(87, 85, 85);
  border-radius: 50%;
  width: 50px;
  height: 50px;
  text-align:center;
  line-height: 47px;
  font-weight: 600;
  
  background-color: rgb(29, 30, 31);
  
  
}
#texto_comentario
{
  margin-top: 30px;
  
}
#user_comentario
{
  font-size: 12px;
  margin-top:10px;
}
#comentarios
{
 
  width: 96%;
  float: left;
 
}


#imagem_doacao
{
  
  width:440px;
   height:500px;
}
.tudo
{
  display: table;
}

#div_lateral
{
 
 border-color:rgb(72, 71, 71);
  border-radius: 10px 10px 10px 10px;
  width: 500px;
  height: 500px;
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
        <div class=" md:block">
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
  

    

  <div class="container mb-12 mt-12">
    <div class="row ">
      

      <div class="col-12 mx-auto  bg-white shadow rounded">
          <div class="input-group mt-3 input-group-sm flex-nowrap">
            
              <p class="text-muted text-lg"><strong>&nbsp; Informações da doação</strong></p>
              
             </div>
  <hr width="250px" style="height: 3px; color: blue ;">
           <div class="row"> 
           <div  class=" col-6  mt-4 mb-2 " style=" ">
          <img id="imagem_doacao" src="{{ url("storage/{$postagens->imagem}") }}"  alt="">          
</div> 

           <div id="div_lateral" class="col-6 border mt-6 mb-3 " >
             <p class=" text-lg mt-2"><strong>DESCRIÇÃO :</strong></p>
             <hr style="color: blue; width:150px; height:3px;">
             <div class="textos ml-12">
               <br>
               <div class="row">
                 <div class="mx-auto">
               <div class="input-group input-group-sm flex-nowrap">   
                 <p><img width="25" height="25" src="{{ url('camiseta.png') }}" alt=""></p>    
        <p class="">  <strong>&nbsp; DOAÇÃO &nbsp;</strong>{{ $postagens->o_que_vai_doar }}</p>
               </div>
        <br>
        <div class="input-group input-group-sm flex-nowrap">
         <p><img width="25" height="25" src="{{ url('cabide.png') }}" alt=""></p>
          <p class=""><strong>&nbsp; TIPO &nbsp;</strong>{{ $postagens->tipo }}</p>
        </div>
          <br>
          <div class="input-group input-group-sm flex-nowrap">
<p><img width="25" height="25" src="{{ url('pacote.png') }}" alt=""></p>
            <p class=""><strong>&nbsp; QUANTIDADE &nbsp;</strong>{{ $postagens->quantidade }}</p>
          </div>
<br>
<div class="input-group input-group-sm flex-nowrap">
  <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg></p>
              <p class=""><strong>&nbsp; TELEFONE &nbsp; </strong>{{ $postagens->telefone }}</p>
</div>
<br>
<div class="input-group input-group-sm flex-nowrap">
  <p><img width="25" height="25" src="{{ url('cidade.png') }}" alt=""></p>
                <p class=""><strong>&nbsp; CIDADE &nbsp; </strong>{{ $postagens->cidade }}</p>
</div>
<br>
<div class="input-group input-group-sm flex-nowrap">
  <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
  </svg></p>
                  <p class=""><strong>&nbsp; BAIRRO &nbsp;</strong>{{ $postagens->bairro }}</p>
</div>
<br>
<div class="input-group input-group-sm flex-nowrap">
  <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
  </svg></p>
                    <p class=""><strong>&nbsp; RUA &nbsp;</strong>{{ $postagens->rua }}</p>
</div>
             </div>
            </div>
            </div>

</div>
               
</div> 


 
  
  
      <div class="col-6">
      <div class="container mt-3 " id="comentarios">
        <div class="comentarios">
          <div class="mb-3">
            <p class="text-muted text-lg"><strong>Comentários :</strong></p>
          <hr style="width: 90px; color:blue; height:3px;">
          </div>
          <div class="row">
            <form method="POST" class="row g-2" action="{{ route('comentarios.store') }}">
              @csrf
                <input type="hidden" name="postagem_id" value="{{ $postagens->id }}">
              
                <label for="comentario" class="text-muted text-lg text-center"><strong>Faça um comentario</strong></label>
                  <div class="col-auto input-group-sm mb-2" style="padding-left: 30%;">
                    <textarea  name="comentario" class="form-control" id="comentario" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' ></textarea>
                  </div>
                 
                  <div class="col-auto">
                    <button type="submit" class="btn btn-sm btn-primary mb-3">Comentar</button>
                  </div>
                
              </form>

              @if ($errors->any())
        <div class="alert alert-danger">
          <strong>algo deu errado</strong> <br><br>
          <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        
        @if ($mensagem = Session::get('mensagem'))
        <div class="alert alert-success">
          <p>{{ $mensagem }}</p>
        </div>
            
        @endif

            @foreach ($postagens->comentarios as $comentario )
            

            
            <div class="col-2 bg-gray-50">
        <p class="imagem text-muted text-lg" id="iniciais">
            {{ $comentario->iniciais() }}
        </p>
            </div>
            <div class="col-10 bg-gray-50 ">
          <p class="comentario " id="texto_comentario">
           {{ $comentario->comentario }}
          </p>
            </div>
            <div  class="col-12 bg-gray-50 mb-2">
              <p style="padding-left:42px;" class="text-muted" id="user_comentario" >
              Autor : {{ $comentario->user->name }} em {{ $comentario->created_at->format('d/m/Y H:i') }}
              </p> 
              <br>
              
            </div>
          
            @endforeach
          </div>
        </div>
        
        
        
        
        
        </div>
      </div>
  </div>
     
  
</div>

</div>

</div>

</div>





















   @yield('footer')

</body>

</html>