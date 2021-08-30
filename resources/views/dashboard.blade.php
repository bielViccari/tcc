<html>
     <head>
        <title>Perfil</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

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






              
                  <div class="container mb-12 mt-12">
                <div class="row">
                  <div class="col-3 mx-auto bg-white shadow rounded">
                      <div class="input-group input-group-sm flex-nowrap">
                    <p class="text-muted mt-3"><strong>Detalhes da conta </strong></p> 
                    <a class="mt-3" style="padding-left: 45%;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg></a>
                      </div>
                        <div class="container mt-5 mb-4" style="padding-left: 23%">
                        <svg class="bd-placeholder-img rounded-circle" width="120" height="120" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                         <div class="mt-1" style="padding-left:50%">
                             <button class="btn-sm btn btn-outline-success">Alterar</button>
                        </div>
                    </div>
                   <hr style="color: rgb(23, 37, 116); height:2px;">
                    <div class="container">
                        <p class="text-muted"><strong> Sobre </strong></p>
                        <form enctype="multipart/form-data" action="#" method="POST">
                            @csrf
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
                              </svg></span>
                            <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="addon-wrapping">
                          </div>
                     </div>

                     <div class="container mt-2">
                        
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                              </svg></span>
                            <input type="text" class="form-control" placeholder="E-mail" aria-label="email" aria-describedby="addon-wrapping">
                          </div>
                     </div>


                     <div class="container mt-2">
                        
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                              </svg></span>
                            <input type="text" class="form-control" placeholder="endereço" aria-label="localizacao" aria-describedby="addon-wrapping">
                          </div>
                     </div>

                     <div class="container mt-2">
                        
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                              </svg></span>
                              <label for="telefone" class="block text-sm font-medium text-gray-700"></label>
                              <input type="text"  name="telefone" id="telefone" placeholder="+55 (99) 9999-99999" class="form-control" onkeypress="$(this).mask('+55 (00) 0000-00009')">
                        
                            </div>
                     </div>

                     <div class="container mt-2">
                        
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg></span>
                              <label for="telefone" class="block text-sm font-medium text-gray-700"></label>
                              <input type="text"  name="telefone" id="telefone" placeholder="(99) 9999-99999" class="form-control" onkeypress="$(this).mask('(00) 0000-00009')">
                        
                            </div>
                            <div class="d-grid justify-content-md-end mb-12">
                            <button type="submit" style="" class="btn btn-sm btn-outline-warning">Salvar </button>
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

                         <div class=" mt-12">
                          <div class="container mt-1" >
                            <div class="row">
                            <div class="col-md-2">
                            <svg class=" rounded-circle mt-0" width="90" height="90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">img</text></svg>
                            </div>
                          <div class="col-md-3 mt-2">
                          <p class="text-muted"><strong> Publicou uma doação:</strong> </p>
                          <p class="text-muted">Titulo: tenis</p>
                          <p><small class="text-muted"> 20/08/2020 às 18:15</small></p>
                          </div> 
                        </div>  
                        </div>    
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
        </body>
</html>

