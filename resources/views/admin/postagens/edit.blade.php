<!DOCTYPE html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solidariedade</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


  <style>

  #instituicao
  {
      width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; 
  }

  #tipo
  {
      width: 15%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; 
  }

  #quantidade
  {
  width: 10%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  #FormControlFile
  {
      width: 100%;
    padding: 10px 5px;
    margin: 8px 0;
    
  }
      input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 20%;
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
    
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

  input[type=submit]:hover {
    background-color: #0a740f;
  }

  div.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    
  }

  #obrigatorio
  {
      font-size: 12px;
      color: red;
  }


  </style>
</head>

<body>
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
  
                <a href="{{ route('postagens.index') }}" id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Doações</a>
  
                <a href="{{ route('postagens.create') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Fazer doações</a>
  
                <a href="{{ route('site.quem_somos.home') }}"id="a" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Quem Somos?</a>
  
                
              </div>
            </div>
          </div>
          <div class=" md:block">
            <div class="ml-1  flex items-center md:ml-6">
             
              @if (Auth::user())

              <a id="a" href="{{ route('perfil.edit') }} " class="text-white hover:text-white px-3 py-2 rounded-md text-sm font-medium" >perfil</a>
              
          @else
          <a id="a" href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
          <a id="a" href="{{ route('site.usuarios.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium">Registrar</a>
       

          @endif
          
               
                
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </nav>
  


  



</ul>
    
@if ($errors->any())

<strong>Oops...</strong> As informações inseridas não são válidas<br><br>

<ul>
@foreach ($errors->all() as $error)
<li>{{  $error }}</li>
    
@endforeach
@endif 

<div class="container">
  <form enctype="multipart/form-data" action="{{ route('postagens.update',$postagens->id)}} " method="post">
@csrf
@method('put')

       <p class="text-muted text-lg text-center"><strong>Editar a Doação</strong></p>
          <div class=" overflow-hidden sm:rounded-md">
            <div class="px-4 py-5  sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                  <label for="o_que_vai_doar" class="block text-sm font-medium text-gray-700">O que vai doar ?</label>
                  <input type="text" name="o_que_vai_doar" id="o_que_vai_doar" value="{{$postagens->o_que_vai_doar}}" autocomplete="o_que_vai_doar" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone para contato:</label>
                  <input type="text" style="" value="{{$postagens->telefone}}"  name="telefone" id="telefone" placeholder="(99) 9999-99999" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" onkeypress="$(this).mask('(00) 0000-00009')">
            
                </div>
      
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
                <select id="country" name="tipo" autocomplete="tipo"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>Meia</option>
                  <option>bermuda</option>
                  <option>Calça</option>
                  <option>Blusa</option>
                  <option>Moletom</option>
                  <option>Cobertor</option>
                </select>
                </div>
      
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade</label>
                <select id="country " name="quantidade" autocomplete="quantidade" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
                </div>

                              

                
          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
            <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade</label>
            <input type="text" value="{{$postagens->cidade}}" name="cidade" id="cidade" placeholder="Rubiácea" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="bairro" class="block text-sm font-medium text-gray-700">Bairro</label>
            <input type="text" value="{{$postagens->bairro}}" name="bairro" id="bairro" placeholder="Centro" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="rua" class="block text-sm font-medium text-gray-700">Rua</label>
            <input type="text" name="rua" id="rua" value="{{$postagens->rua}}" autocomplete="rua" placeholder="Rua Coronel prudente correa,279" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
              </div>
            </div>
          </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">
            Foto da doação
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 bg-white pb-6 border-2 border-gray-300  rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="formControlFile" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <input type="file" class="form-control-file" id="imagem" name="imagem"> 
                </label>
                
              </div>
              <p class="text-xs text-gray-500">
                PNG, JPG, max 10MB
              </p>
            </div>
          </div>
        </div>
        

        <div class="px-4 py-3  text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Editar
          </button>
        </div>
      </div>
      
    </div>
  </form>
</div>

</body>