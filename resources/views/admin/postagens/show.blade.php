<!DOCTYPE html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Solidariedade</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
#myFooter
{
  
  width: 100%;
	height: 100px;
	position: absolute;
	bottom: 0;
	left: 0;
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
    background-color: ;   
}

#myFooter .container{
    text-align: center;
    
}

#myFooter .footer-copyright{
    margin-bottom: 35px;
    text-align: center;
    color: #777;
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
    background-color:  rgb(0, 17, 255);
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

    

<div class="container border-rounded-lg  shadow-md  mt-14">
    <div class="flex">
      <div class="flex-none w-48 relative">
        <img src="{{ url("storage/{$postagens->imagem}") }}" alt="" class="absolute inset-0 w-full h-full object-cover" />
      </div>
      <form class="flex-auto p-6">
        <div class="flex flex-wrap">
          <h1 class="flex-auto text-xl font-semibold">
            {{  $postagens->o_que_vai_doar }}
          </h1>
          <div class="text-xl font-semibold text-gray-500">
          
           <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
            <svg width="20" height="20" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
            </svg>
          </button>
          </div>
          
        </div>
        <div class="flex items-baseline mt-4 mb-6">
          <div class="space-x-2 flex">
            <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
              Contato: &nbsp &nbsp &nbsp &nbsp &nbsp {{ $postagens->telefone }}
            </div>
            
          </div>

          

          <div class="ml-auto text-sm text-gray-500 underline"></div>
        </div>
        <div class="flex items-baseline mt-4 mb-6">
          <div class="space-x-2 flex">
            <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
              Tipo:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp{{ $postagens->tipo }}
            </div>
            
          </div>

          

          <div class="ml-auto text-sm text-gray-500 underline"></div>
        </div>
        
        <div class="flex items-baseline mt-4 mb-6">
          <div class="space-x-2 flex">
            <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
              Quantidade:&nbsp &nbsp &nbsp {{ $postagens->quantidade }}
            </div>
            
          </div>

          

          <div class="ml-auto text-sm text-gray-500 underline"></div>
        </div>
        <div class="flex space-x-3 mb-4 text-sm font-medium">
          <div class="flex-auto flex space-x-3">
      
          </div>
          <p class="flex-none flex items-center justify-center w-9 h-9  text-gray-400" >
            
          </p>
        </div>
        
      </form>
    </div>
</div>




    <footer id="myFooter">
        <div class="container">
            
           
        </div>
        <div class="footer-social">
         
      <a href="#" class="circle-icons fa fa-facebook"></a>
      <a href="#" class="circle-icons fa fa-instagram"></a>
      <a href="#" class="circle-icons fa fa-google"></a>
        </div>
      </footer>

</body>

</html>