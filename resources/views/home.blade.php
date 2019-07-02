@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Bootstrap HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
    </head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
<body>

<div class="col-md-12" >
      <div class="jumbotron" style=" background-image: url('img/fondo.jpg')";>
  
  <p class="lead"></p>
  <hr class="my-6">
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
  <a  href="#" role="button"></a>
</div>
    <div class="container-fluid">
        <div class="row">
        <header class="col-md-12">
             <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                   
            </div>

                  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-2" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Portada<span class="sr-only">(current)</span></a></li>
                      <li><a href="#">Estrenos</a></li>
                        <li><a href="#">Recientes</a></li>
                        <li><a href="#">Populares</a></li>
                      
                    </ul>
                    
                  </div>
                </div>
              </nav>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
        </header>
        </div>
        <div class="row">
        <aside id="columna" class="col-md-3">
             <iframe width="299" height="168" src="img/aaaa.jpg"  allowfullscreen></iframe>  
           <div class="list-group">
  <a href="#" class="list-group-item active">
    Categoría
  </a>
               
  <a href="#" class="list-group-item">Audio</a>
  <a href="#" class="list-group-item">Video</a>
  <a href="#" class="list-group-item">Gamer</a>
  <a href="#" class="list-group-item">Accesorios</a>
</div>
        </aside>

        <section id="seccion" class="col-md-8">
            <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/001.jpg" data-holder-rendered="true"></center>
          <div class="caption">
            <center><h4>Volante $15 </h4></center>
              <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="15" titulo="Volante"  role="button">Añadir</a>
            </div></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/002.jpg" data-holder-rendered="true"></center>
          <div class="caption">
            <center><h4>Cámara $12</h4></center>
                 <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="12" titulo="Cámara"  role="button">Añadir</a>
</div></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/003.jpg" data-holder-rendered="true"></center>
          <div class="caption">
            <center><h4>Cámara Ip $22</h4></center>
                 <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="22" titulo="Cámara ip"  role="button">Añadir</a>
</div></p>
          </div>
        </div>

      </div><div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/004.jpg" data-holder-rendered="true"></center>
          <div class="caption">
            <center><h4>Monitor $60</h4></center>
                 <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="60" titulo="Monitor"  role="button">Añadir</a>
</div></p>
          </div>
        </div>
        <br>
      </div><div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
         <center> <img data-src="holder.js/100%x200" alt="100%x200" src="img/005.jpg" data-holder-rendered="true"></center>
          <div class="caption">
            <center><h4>Pantalla $200</h4></center>
                 <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="200" titulo="Pantalla "  role="button">Añadir</a>
</div></p>
          </div>
        </div>
        <br>
      </div><div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/006.jpg" data-holder-rendered="true"></center>
         <div class="caption">
             <center><h4>Impresora $70</h4></center>         
                 <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="70" titulo="Impresora Hp"  role="button">Añadir</a>
</div></p>
          </div>
        </div>
      </div>
      <br>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/007.jpg" data-holder-rendered="true" ></center>
          <div class="caption">
            <center><h4>CPU $800</h4></center>
            
            <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="800" titulo="CPU Gamer"  role="button">Añadir</a>
</div></p>
          </div>
        </div>
      </div>
      <br>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/008.jpg" data-holder-rendered="true" ></center>
          <div class="caption">
            <center><h4>Escanner $50</h4></center>
          <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="50" titulo="Escanner"  role="button">Añadir</a>
          </div>
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/024.jpg" data-holder-rendered="true" ></center>
          <div class="caption">
            <center><h4>Parlantes $18</h4></center>
          <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="18" titulo="Parlantes"  role="button">Añadir</a>
          </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/020.jpg" data-holder-rendered="true" ></center>
          <div class="caption">
            <center><h4>Mouse $33</h4></center>
          <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="33" titulo="Mouse"  role="button">Añadir</a>
          </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/021.jpg" data-holder-rendered="true" ></center>
          <div class="caption">
            <center><h4>USB 3.0 $40</h4></center>
          <div class="col-md-12">  
      <a src='img/icono.png' href="#"  class="btn btn-success producto" precio="40" titulo="USB 3.0"  role="button">Añadir</a>
          </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="border-color: black;  border-style: outset; border-width: 4px;" >
          <center><img data-src="holder.js/100%x200" alt="100%x200" src="img/023.png" data-holder-rendered="true" ></center>
          <div class="caption">
            <center><h4>Audifonos $15</h4></center>
          <div class="col-md-12">  
      <ahref="#"  class="btn btn-success producto" precio="15" titulo="Audifonos"  role="button">Añadir</a>
          </div>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Archivo js sacado de internet  -->
    <script src="{{asset('js/minicart.js')}}"></script><!-- llamada al archivo js que está en la carpeta public/js -->
  <script>
// configuración inicial del carrito 
    paypal.minicart.render({
    strings:{
      button:'Pagar'
     ,buttonAlt: "Total"
     ,subtotal: 'Total:'
     ,empty: 'No hay productos en el carrito'
    }
    });
    // Eventos para agregar productos al carrito
    
     $('.producto').click(function(e){
         e.stopPropagation();
        paypal.minicart.cart.add({
      business: 'uhperezoscar@gmail.com', // Cuenta paypal para recibir el dinero
      item_name: $(this).attr("titulo"),
       amount: $(this).attr("precio"),
       currency_code: 'USD',
      
      });
     });
    
  </script>
  <br>
  <br>
             <footer id="pie" class="col-md-12">
                Derechos Reservados © Oliver 2019-2020
            </footer>   
        </section>

        </div>
    </div>

</body>
</html>



   
@endsection


