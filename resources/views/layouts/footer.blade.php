<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 
 <style>   
#myFooter{
    padding-top:32px;
    
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
    background-color: #0505a2;
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
    background-color: #0a0aa2;
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
    <body>
        @yield('footer')
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