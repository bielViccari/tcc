<!DOCTYPE html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<title>editando publicação</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


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
    background-color: #eee;
}

#myFooter .fa{
    font-size: 36px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: white;
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

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/1_tc.jpg/220px-1_tc.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
          Solidariedade
        </a>
      </nav>
    <div class="collapse navbar-collapse" id="navbarToggler">
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin') }}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('postagens.index') }}">Doações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('postagens.create') }}">Fazer Doações</a>
        </li>
      </ul>
      
    </div>
  </nav>

      @if ($mensagem = Session::get('mensagem'))
        <div class="alert alert-success">
            <p>{{ $mensagem }}</p>
        </div>
          
      @endif


<div class="container">
    <form enctype="multipart/form-data" action="{{ route('postagens.update', $postagens->id) }}" method="POST">
        @csrf
        @method('put')

      <label for="o_que_vai_doar">Oque vai doar ?</label>
      <input value="{{ $postagens->o_que_vai_doar ?? old('o_que_vai_doar') }}" type="text" id="o_que_vai_doar" name="o_que_vai_doar" placeholder="ex.: calça jeans N 40">

      <label for="instituicao">Instituições:<a id="obrigatorio">&nbsp &nbsp &nbsp &nbsp*não obrigatório</a></label>
      <select id="instituicao" name="instituicao">
        <option value="nenhuma">Nenhuma</option>
        <option value="Santa Casa de Guararapes">Santa Casa de Guararapes</option>
        <option value="instituto de ajuda à menores">instituto de ajuda à menores</option>
        <option value="Ong sem teto">Ong sem teto</option>
        
      </select>

      <label for="tipo">Tipo:</label>
      <select id="tipo" name="tipo">
        <option value="meia">meia</option>
        <option value="sapato">sapato</option>
        <option value="bermuda">bermuda</option>
        <option value="calça">calça</option>
        <option value="camisa">camisa</option>
        <option value="moletom">Moletom</option>
        <option value="camisa">Cobertor</option>
      </select>

      <label for="quantidade">Quantidade : </label>
      <input value="{{ $postagens->quantidade }}"  type="number"  name="quantidade" id="quantidade" >
      
      <label>Telefone</label>
      <input type="text"  name="telefone" id="telefone" placeholder="(99) 9999-99999" class="form-control" onkeypress="$(this).mask('(00) 0000-00009')">

      

      <label for="FormControlFile">Imagem do produto: </label>
      <img src="{{ url("storage/{$postagens->imagem}") }}" alt="{{ $postagens->o_que_vai_doar }}" class="img img-thumbnail img-fluid">
      <input value="{{ $postagens->imagem }}" type="file" class="form-control-file" id="FormControlFile">
      

      


      <center>
        <button class="btn btn-warning float-right" type="submit">Salvar Alterações</button>
        </center>
    </form>
  </div>
  <footer id="myFooter">
    <div class="container bg-white">
        
        <p class="footer-copyright">© 2021 Copyright - Solidariedade</p>
    </div>
    <div class="footer-social">
     
  <a href="#" class="circle-icons fa fa-facebook"></a>
  <a href="#" class="circle-icons fa fa-instagram"></a>
  <a href="#" class="circle-icons fa fa-google"></a>
    </div>
  </footer>
    
</body>