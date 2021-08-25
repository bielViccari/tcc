<html>

<head>

<title>Cadastro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
   














   
  <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <a href="{{ route('site.home') }}" ><img class="mx-auto h-12 w-auto"  src="{{ url('solidariedade.png')  }}" alt="Workflow"> </a>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Crie uma nova conta
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Ou
          <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
            Entre na sua conta agora !
          </a>
        </p>
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ol>
          @foreach ($errors->all() as $erro)
              <li>{{ $erro }}</li>
          @endforeach
          <ol>
      </div>
  @endif
      <form class="mt-8 space-y-6"  method="POST" action="{{ route('site.usuarios.create') }}">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="name" class="sr-only">Nome </label>
                <input id="name" name="name" type="name" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="nome">
              </div>
            <div>
            <label for="email" class="sr-only">Email </label>
            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email">
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Senha">
          </div>
          <div>
            <label for="password_confirmation" class="sr-only">Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="password_confirmation" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmar senha">
          </div>
        </div>
  
        
  
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Cadastrar
          </button>
        </div>
      </form>
    </div>
  </div>






</body>
</html>