<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        

        <title>@yield('titulo')Solidariedade</title>

        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style type='text/css'>
    * { margin: 0; padding: 0; }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');


#quem_somos
{
  
  text-decoration: underline;
  

}

.blog-post 
{
 
  
}

#titulo
{
  text-decoration: overline lightgray;
}
 .body-post-title
 {
   text-decoration: overline;
 }

#img1
{
  border-radius: 10px 10px 10px 10px;
}  


.container
{
  background-color: white;
}
 
#carousel
{
  left: 4%;
  width: 92%;
}

#p1
{
  padding-top: 5%;
}

#img2
{
  border-radius: 10px 10px 10px 10px;
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
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}


.circle-icons {

  padding: 10px; 

  font-size: 18px;

  width: 18px; 

  text-align: center;

  text-decoration: none;

  margin: 5px 2px; 

  border-radius: 50%;  

  background: #f0e9e9; 

  color: #fff; 

}


.circle-icons:hover {

    background: #ccc; 

    color: #fff;  

    opacity: 0.7;

}

#img_post
{
  padding-top: 10px;
  border-radius:  10px 10px ;
}

#a
{
  color: #282b2d;
}

#navigation
{
  background-color:
}
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}

        </style>

    </head>
    <body>
      
     
     
      

        <div class="row container">
          <div  class="col">
            <center>
            <img id="image1" class="rounded-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABI1BMVEX////ivADU3+l1abBIneMJM1fjvh7mxkvovQBxZK7Z5exzZ6/guADV4Orl7PI5m+q/tFdpW6rqwgBtYKwAMFgAKFoAKlkAJFrz8vj3+fvc5/D16bs6mON4bLKDeLd9c7QAHkrM2+kALE81e7YAIVvp5/LL1OSPir/q0Grx3579+u9CUEvs1HgtRE/FwdyuqM+Mg726tdbd2uqkncmdlsaLhbyrrc+iosq3vNcAFUYAIUxxhZnD3PWUwOmpzfBnq+d4seXt1oGUv+YSQGf16bpCk9WSrqJgY0PIqhVsakAaOVXnyVCGfDi9ox3QzOPAx92ywM2So7M5VHCotsVdc4pHX3qElqmbq7v69NwkXY3EtVFoo8GMgDaWhzJJVEqjkCxYXUajJZQyAAAJOklEQVR4nO2ca1fTSBiAm9ICkzRimlqgUlqwNFBBWigKRUUFBBUEYXHRXXX//6/YmaSX3G8zIW975vmk2JMzD+9tMknNZDgcDofD4XA4HA6Hw+FwOJyJZGHnxXa3vVytVWvt7vbXtbTXE4FOZyHoIzsdTVJUFSFJmpqakiSEVAXt7jzE6hiwrahK12exay80pBpqFiSk1L4+3DIpqOLVIlXVOl/XFi3/sLiG83IPxw457AaSirbocVVALCrGYiWceCqq7XV3CVq7Sv7uFjsLqApfcUcxB4WUmI4UoDZUXE5bIJCvaigTT9TttA2C6CA6Q0mFnqfblIZT6ou0FQLYpTVEWtoKAVAbTiGlqnUAT3/qLNUl8RbHb9eQKi8oe+kAuFucHUaGRFKtgYyjErz08I4KxOnYZVGIQ9S9tH2crLEMIm467bSFnHQYK3bTFnLSUcLtskOidtIWcrKwzFRRCTwzeGh22ArCy9Pd+EmKVNdGrMA6pmrHH/lov/lKdfn1oN20pczsxR+HqCvKYnPZeQFJStvKxC7Fpk25krNZWdacl1Dg7N52KGYh0sQsRhadvyUEZ2DU4ndRqZqVszqiY+MH566Y4hgK1Zp9QaxoL2aplrbZgHbcECKlmx0K4j/Zc0FN26zPQrwqlBDSmuJIEAfxypYMCpADOO/7+9HRsHE6LPV/iv+mor2XKxY/ovjKmqdQNm7ut4YSUtXqcrv7ymC3q+0t13SWtd2X+01ZtPuRmVG1GgLZ1bh0UklV915eNbOiJw47Q3Hfkg9QYuicY0jbJyFyt/BFtAQRSB3aG42k4gYiRpczgvjSnPJAeqnt/EKSrjxSMJRh1vS0Cso8tBpKy834flnrzkYCsqexZOloExY3iKZeg4AcKi6aDdFV3AocKo4MwTyPMvVS9IpWMCuO9oBQxmHGdD6DKHOUGA4fY8G5Ax71Bny7TitomhdwjqJG+1J1n4HhsNWoYB5CjcaFSjcpDMPmwBDKni1jvC1k5NUKA8OVfpZKgJ7ODB4AS1P0glhxSoI1KzKmNK3RlyFuprV+ksLYdhv0R5jUZmJoXA1OJyX0TxMljYmhphsCOiwlDH7tTAz1+SoBe0RKKlFCCiNDBUmAhmGfbVXV9psM/AjNfU2ppm3koH3ldfYSHVkUr6CFMJNhpjeQTFvIziOmfoRHaStZWWQumM1CGvhJhBBaELkhN4RvOPmdJlNhLlhJW8kOc8O0hRwsMt7TAMtRnUfsHGVYXcYEm5YKVi/DDSfBcIGJIZyDYCeTb8hmawNxUAyYfEM2O5u0JXxh8twibQlfWBiC23JbYHGLAduQxciHPPDZDETI45DNuAA9LJiMi7QVAmDwHD9thQCitBrZ9QVU2I0mUiFWstfXFacj7EaTiVCIlW+9ev3G+QJO2gKBhC1E+fogn8+Xbux7BOhlGL4QKzclbJivX9t+JdDLMHQhVr73iGC+d2szBD4NCWH85Mq3et4wtL8nlvbyQ+CXpnKlgkeEXFn5ayB4aKtD+Enql6Zy5fbw++317be/eqv5PvY3bscgSX26qXhXL/V69V6vNPA7sFch/E5K8ErTyvd63kr9u31WjEOSZjx7TeWuFCQ4Dn2G4BFEm2Gp/rdDcExC6BVE+e8Ds99d03nkkfbCQ+MVxMODXmkVU+od3LltuscmhN6V2Px2eHdzc3d4m3XxG6MQes9EPOx13L+ZCP6+yUycU0Vw7+r5E8Mw7SVHJPqh21jlKCHq2fAY9dEB0UoR9lG+B1EUx1IwiuKYCkYoxTEsQh1uyA3hww25IXy44bgbLr5+E/Kb3fLKm9djcRJspvL2aGlpKfc2xDfaZPFtDn/26O34bN1w8PCSc4Slo9cBjrL4+qj/2aXcWIRSD15uxNK7Fb9vzoor7yyfBh7K+5N14fGcecX6qj94/o9YsvzB8em5x8L6SSttFRdaTzeFQkEQZn/O5eyL9ihHvQDtH577OSuQC20+BWV5vzFD7HRmHzsUcTm6pKq4cuTwy809nu1fp1CY2bhPW8ygH7whboq5pTe2B4Vy9p3Tz4jgED2UqeutC2Y7H0VLqromqDmCI0thPUXJ+82CQ09XdNZizjw5RhPCL4KmUG6mkq6tjWlXPc8oDieHbUL4RXAoOb3x0I2n9d49fP6KZHKIzgkRKKgH8v1DOrY2/fR8FXMf3AowUFCX3Hwwx40gPx/F095pTEHiuPEgfq2ZEIKeiserx7EFseLMA4TxaZiVeCr+WM2v/ogtSEi8rT4NFUAvxWfkTaHVZxSCQuEkWcH78IIuiqfGq1Crp/EFsWKiUWxFEXQqHvdfxDimEMSKSdbiTKSl2BV/DN5ms5RiVEFBmElO8CRaCG2Kz4av65lLMbqgUEhupzoddS1mxdORoKkUYwgKwnRSghH6qIvicd7MMYVgckFcj7GYoeKPVYuhUYrxBAVhPSHDWIvRFZfmPp5ZX0wsnX3EP40pKAjJCEaahRbFn/98nL1sWAwbl7Mf/3G/HwxBQjMxVhn2HWeF4tkTk+CTsyL5YVwSKsQwtxQ+FJ+PFJ88L1JdK6GbjE2qRWHFT42y7ldufKITFITNRAy/UK5KKJ5/+owFP386pxUUvsA0xI5bpXxpi9ovKcOom1IXzklDbZzTXyiZrSm9YfGCFGL5gj6IYA23yNhnkaZQDc/n9V46T5+mQA2L//anxb/UQYRquGXsTRmkKVDD88HWlL6bwjQcJCmLNAVq+HxwA1Wi3JZCNex3UibdFKRh8Vd5aFj+RRlEmIbPR3f51GkK0nB6lKQ4TWMc20E3NCcpvgWmTFOQhr/NR1Gl35NnWDAf0+Ag0h2JADQs/rEZ/qEKIkTD37bz0v8mzbBQzlspU6UpPEN7ktKmKUDD/2z/2wBlmsIzFOxJitOU5nLgDJ1JSpmm8AwdSUqePk2SoeDwI1BcD57hZ5cYbk2U4eW8w3D+cqIMi7/sivNUdxfwDIXimXVelGn6DEhDQdiy3D3RFCFUw3NzEMuUR1EgDYt/Ru8qNOjunYAaCsWLwcbmCfXzNZiGw9M2+gNhqIZCIa8/P8zTnWAkZxj4gn4gRf21ocYldQgLybyL0aJdFxn8jVKD9rybkNBLtK31aVqEi88XAvVV1kF9c4/D4XA4HA6Hw+FwOBwOh8PR+R/XfjFQaiVz5QAAAABJRU5ErkJggg==" width="140" height="140">
            </center>
                   
            <h2 class="mt-2"><center><strong>Gabriel Viccari de Almeida</strong></center></h2>
            <br>
            <br>
            <p >Aluno do 3 ano do ensino médio na escola etec de araçatuba ext. de guararapes </p>
            <br><br>
            
          </div>
          <div class="col">
            <center>
            <img id="image1" class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            </center>
                   
            <h2 class="mt-2"><center><strong>Gabriel Viccari de Almeida</strong></center></h2>
            <br>
            <br>
            <p>Aluno do 3 ano do ensino médio na escola etec de araçatuba ext. de guararapes </p>
            <br><br>
            
          </div>
          <div class="col">
            <center>
            <img id="image1" class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            </center>
                   
            <h2 class="mt-2"><center><strong>Gabriel Viccari de Almeida</strong></center></h2>
            <br>
            <br>
            <p>Aluno do 3 ano do ensino médio na escola etec de araçatuba ext. de guararapes </p>
            <br><br>
            
          </div>
          <div class="col">
            <center>
            <img id="image1" class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            </center>
                   
            <h2 class="mt-2"><center><strong>Gabriel Viccari de Almeida</strong></center></h2>
            <br>
            <br>
            <p>Aluno do 3 ano do ensino médio na escola etec de araçatuba ext. de guararapes </p>
            <br><br>
            
          </div>
          <div class="col">
            <center>
            <img id="image1" class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            </center>
                   
            <h2 class="mt-2"><center><strong>Gabriel Viccari de Almeida</strong></center></h2>
            <br>
            <br>
            <p>Aluno do 3 ano do ensino médio na escola etec de araçatuba ext. de guararapes </p>
            <br><br>
            
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
    

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        
    </body>
    



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    




        
</html>