<html>
  <head>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
<body>
<div> 
  @yield('topo')
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
           
            @if (Auth::user())

            <a href="{{ route('dashboard') }} " class="text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" >PERFIL</a>
            
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
</body>
  