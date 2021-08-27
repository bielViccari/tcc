<!DOCTYPE html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solidariedade</title>

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
  
                <a href="{{ route('postagens.index') }}" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium"  >Doações</a>
  
                <a href="{{ route('postagens.create') }}" class="bg-blue-800 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">>Fazer doações</a>
  
                <a href="#" class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Quem Somos?</a>
  
                
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


  

@if ($errors->any())

<strong>Oops...</strong> As informações inseridas não são válidas<br><br>

<ul>
@foreach ($errors->all() as $error)
<li>{{  $error }}</li>
    
@endforeach

</ul>
    
@endif


  <form enctype="multipart/form-data" action="{{ route('postagens.store') }}" method="POST">
@csrf

    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 bg-gray-50 space-y-6 sm:p-6">
        

        <div>
          <label for="o_que_vai_doar" class="block text-sm font-medium text-gray-700">Oque vai doar ?</label>
          <input type="text" id="o_que_vai_doar" name="o_que_vai_doar" placeholder="ex.: calça jeans N 40">
    
          <label for="instituicao" class="block text-sm font-medium text-gray-700">Instituições:<a id="obrigatorio">&nbsp &nbsp &nbsp &nbsp &nbsp*não obrigatório</a></label>
          <select id="instituicao" name="instituicao" class="block text-sm font-medium text-gray-700">
            <option value="nenhuma" class="block text-sm font-medium text-gray-700">Nenhuma</option>
            <option value="Santa Casa de Guararapes" class="block text-sm font-medium text-gray-700">Santa Casa de Guararapes</option>
            <option value="instituto de ajuda à menores" class="block text-sm font-medium text-gray-700">instituto de ajuda à menores</option>
            <option value="Ong sem teto" class="block text-sm font-medium text-gray-700">Ong sem teto</option>
            
          </select>
    
          <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo:</label>
          <select id="tipo" name="tipo" class="block text-sm font-medium text-gray-700">
            <option value="meia" class="block text-sm font-medium text-gray-700">meia</option>
            <option value="sapato" class="block text-sm font-medium text-gray-700">sapato</option>
            <option value="bermuda" class="block text-sm font-medium text-gray-700">bermuda</option>
            <option value="calça" class="block text-sm font-medium text-gray-700">calça</option>
            <option value="camisa" class="block text-sm font-medium text-gray-700">camisa</option>
            <option value="moletom" class="block text-sm font-medium text-gray-700">Moletom</option>
            <option value="camisa" class="block text-sm font-medium text-gray-700">Cobertor</option>
          </select>
    
          <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade:</label>
          <input style="width:70px; padding:0;"  type="number"  name="quantidade" id="quantidade" value="1" class="block text-sm font-medium text-gray-700">
              
          
          <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone para contato:</label>
          <input type="text" style="width: 200px;"  name="telefone" id="telefone" placeholder="(99) 9999-99999" class="form-control" onkeypress="$(this).mask('(00) 0000-00009')">
    
          

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
      </div>
      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Salvar
        </button>
      </div>
    </div>
  </form>



</body>



    
