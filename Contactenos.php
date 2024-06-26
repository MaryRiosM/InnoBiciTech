<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOBICITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <style>
      body {
        padding-top: 56px; /* Ajusta el padding del cuerpo para compensar la altura del navbar fijo */
      }
    </style> 
</head>
<nav class="navbar expand-lg fixed-top justify-content-center">
  <div class="container-fluid">   
    <strong>
      <a class="navbar-brand">Innobicitech</a>
    </strong>
    <form class="d-flex carrito-izquierda" role="Buscar">
      <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-primary py-1" type="submit">Buscar</button>
    </form>
    <a href="Productos.php" target="_blank" class="carrito-izquierda">
      <img src= "IMG/Carrito-comp.png" alt="Miniatura" width="70" height="40" style="border-radius: 50%" class="carrito-izquierda">
    </a>    
    <img  src= "IMG/logo1.jpeg" alt="Miniatura" width="70" height="40" style="border-radius: 50%">
  </div>
</nav>
<body>
      <div class="container d-flex justify-content-center padding-top">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-12">
                <div class="btn-group d-flex" role="group" aria-label="Basic outlined example">
                  <a href="Inicio_sesion.html">
                    <button type="button" class="btn btn-secondary">Inicio de sesion</button>
                </a>
                  
                   <a href="Productos.php">
                    <button type="button" class="btn btn-secondary">Productos</button>
                   </a>
                    <a href="Servicio_Tecnico.php"><button type="button" class="btn btn-secondary">Servicio Técnico</button></a>
                    <a href="tienda.php"><button type="button" class="btn btn-secondary">Tiendas</button></a>
                    <a href="Contactenos.php"><button type="button" class="btn btn-secondary">Contactenos</button></a>
                    <a href="PQR.php"><button type="button" class="btn btn-secondary">PQR</button></a>
                   
                  </div>
            </div> 
        </div>
    </div>
<br>
<br>
<br>
        <div class="container mt-5 text-center">
            <img src="IMG/logo_innobicitech_peque.png" class="card img-fluid text-center mx-auto" alt="Icono de red social" class="img-thumbnail img-circle" style="border-radius: 50%; width: 170px; height: 170px;">
        </div>
          <div class="container mt-5">
            <div class="row mx-auto">
    
                <!-- Columna 1 -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body text-center">
                        <h5 class="card-title container d-flex justify-content-center text-center">Comunicate con MarycelBot, tu asistente virtual por chat web o WhatsApp +57 3046783740 para recibir información y poder orientarte, MarycelBot te acompaña las 24 horas del día.</h5>
                        <p class="card-textcontainer d-flex justify-content-center">WhatsApp</p>
                        <a href="https://wa.me/573153470211?text=Hola+muy+buen+d%C3%ADa+%F0%9F%8C%A4%0D%0AMe+gustaria+preguntar+por+un+producto+de+INNOBICITECH%F0%9F%92%A5"><img src="IMG/whataap_logo_peque_1.png" class="IMG/img-thumbnail img-circle" style="width: 50px; height: 50px;"></a>
                      </div>
                    </div>
                </div>

    
                <!-- Columna 2 -->

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body text-center">
                        <h5 class="card-title container d-flex justify-content-center text-center">Comunicatea través de nuestra linea de atención las 24 horas del día o visitanos en nuestro Instragram para que puedas ver nuestros productos y poderte asesorar personalizadamente.</h5>
                        <p class="card-textcontainer d-flex justify-content-center">Instragram</p>
                        <a href="https://www.instagram.com/jorgeluisbaron/"><img src="IMG/instagram.png" class="IMG/img-thumbnail img-circle" style="width: 50px; height: 50px;"></a>
                      </div>
                    </div>
                </div>


                <!-- Columna 3 -->

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body text-center">
                        <h5 class="card-title container d-flex justify-content-center text-center">Has parte de nuestra comunidad en Facebook para que te enteres de todas las novedades que tenemos para ti en Innobicitech.</h5>
                        <br><br><br>                        
                        <p class="card-textcontainer d-flex justify-content-center">Facebook</p>
                        <a href="https://www.facebook.com/?locale=es_ES/"><img src="IMG/face_peque.png" class="IMG/img-thumbnail img-circle" style="width: 50px; height: 50px;"></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <footer class="text-light navbar bg-dark expand-lg fixed-bottom justify-content-center">
          <div class="container-fluid">
            <div class="row col-xl-12 text-center">
              <h6>2024 © Todos los derechos reservados</h6>
            </div>
          </div>
        </footer>
</body>
</html>